<?php

namespace App\Filament\Resources\PostResource\Pages;

use App\Filament\Resources\PostResource;
use Filament\Resources\Pages\CreateRecord;
use Filament\Pages\Actions\Action;
use Illuminate\Support\Facades\Cache;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;

class CreatePost extends CreateRecord
{
    protected static string $resource = PostResource::class;

    protected function afterCreate(): void
    {
        // Clear homepage cache
        Cache::forget('homepage_sections');

        // Rebuild homepage feed
        (new HomeController)->generateHomeFeed();

        // Regenerate sitemap
        Artisan::call('sitemap:generate');

        try {
           $categorySlug = $this->record->category?->scheme;
        $postSlug = $this->record->slug;

        // URLs
        $homeUrl = url('/');
        $categoryUrl = $categorySlug ? url('/' . $categorySlug) : null;
        $postUrl = $categorySlug && $postSlug
            ? url('/' . $categorySlug . '/' . $postSlug)
            : null;

        // 1️⃣ Purge only listing pages
        $purgeUrls = array_filter([$homeUrl, $categoryUrl]);

        Http::withToken(config('services.cloudflare.token'))
            ->post(
                "https://api.cloudflare.com/client/v4/zones/"
                . config('services.cloudflare.zone_id')
                . "/purge_cache",
                ['files' => $purgeUrls]
            );

        // 2️⃣ Warm listing pages + post page
        $warmUrls = array_filter([$homeUrl, $categoryUrl, $postUrl]);

        foreach ($warmUrls as $url) {
            Http::timeout(5)->get($url);
        }



        } catch (\Throwable $e) {
        logger()->warning('Cloudflare purge/warm failed', [
            'error' => $e->getMessage(),
        ]);
    }
    }

    protected function getActions(): array
    {
        return array_merge(parent::getActions(), [
            Action::make('generateSnippet')
                ->label('Generate Snippet')
                ->color('secondary')
                ->action('generateSnippet'),
        ]);
    }

    public function generateSnippet(): void
    {
        $state = $this->form->getState();
        $content = $state['content'] ?? '';

        if (trim($content) === '') {
            $this->notify('danger', 'Post content is empty — please add the article content first.');
            return;
        }

        // Build the prompt (your exact requirements)
        $prompt = "I will give you the full article content. Your task is to write a clean, engaging 50–100 word summary for use as an article preview in APIs.\n"
            . "Requirements:\n"
            . "- Keep it factual and neutral.\n"
            . "- No extra headings.\n"
            . "- No emojis.\n"
            . "- No repetition.\n"
            . "- Must read like a professional magazine snippet.\n"
            . "- Do not exceed 100 words.\n"
            . "- Avoid flowery or dramatic language.\n\n"
            . strip_tags($content);

        // Get API key from env or config
        $apiKey = config('services.google.api_key') ?? env('GOOGLE_API_KEY');

        if (empty($apiKey)) {
            $this->notify('danger', 'Generative API key not configured. Please set GOOGLE_API_KEY in your .env file.');
            return;
        }

        $endpoint = "https://generativelanguage.googleapis.com/v1beta2/models/text-bison-001:generate?key={$apiKey}";

        try {
            $response = Http::withHeaders([
                'Accept' => 'application/json',
            ])->post($endpoint, [
                'prompt' => [
                    'text' => $prompt,
                ],
                'temperature' => 0.3,
                'maxOutputTokens' => 256,
            ]);
        } catch (\Exception $e) {
            $this->notify('danger', 'Request failed: ' . $e->getMessage());
            return;
        }

        if (! $response->ok()) {
            $this->notify('danger', 'Generative API error: ' . $response->status());
            return;
        }

        $json = $response->json();

        // Extract generated text from common response shapes
        $generated = null;
        if (isset($json['candidates'][0]['content'])) {
            $generated = $json['candidates'][0]['content'];
        } elseif (isset($json['candidates'][0]['output'])) {
            $generated = $json['candidates'][0]['output'];
        } elseif (isset($json['output'][0]['content'])) {
            $generated = $json['output'][0]['content'];
        } elseif (isset($json['text'])) {
            $generated = $json['text'];
        }

        if (empty($generated)) {
            $this->notify('warning', 'No snippet was returned by the API.');
            return;
        }

        // Clean up and enforce ~100-word limit
        $snippet = trim($generated);
        $words = preg_split('/\s+/', $snippet);
        if (count($words) > 100) {
            $snippet = implode(' ', array_slice($words, 0, 100));
        }

        // Fill the form's snippet field and notify
        $this->form->fill(['snippet' => $snippet]);
        $this->notify('success', 'Snippet generated and filled. Please review before saving.');
    }
}
