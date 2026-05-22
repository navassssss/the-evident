<?php

namespace App\Models;
use Illuminate\Support\Facades\Cache;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Post extends Model
{
    // Author
    use HasFactory;
    protected static function booted()
    {
        static::addGlobalScope('is_published', function ($query) {
            $query->where('is_published', true)
                // ->where('published_at', '<=', now())
                ->orderByDesc('published_at');
        });
         static::created(fn ($post) => self::flushCaches($post));
    static::updated(fn ($post) => self::flushCaches($post));
    static::deleted(fn ($post) => self::flushCaches($post));
    }
   

protected static function flushCaches($post)
{
    // Single post page
    Cache::forget("post_html_{$post->id}");

    // Homepage
    Cache::forget('homepage_html');

    // Category pages (first few pages are enough)
    for ($i = 1; $i <= 3; $i++) {
        Cache::forget("category_{$post->category_id}_page_{$i}");
    }

    // Section pages
    if ($post->category && $post->category->section_id) {
        for ($i = 1; $i <= 3; $i++) {
            Cache::forget("section_{$post->category->section_id}_page_{$i}");
        }
    }}

    public function author()
    {
        return $this->belongsTo(Author::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function getMediaThumbnailAttribute()
    {
        return $this->thumbnail_url ? [
            'xmlns$media' => "http://search.yahoo.com/mrss/",
            'url' => Storage::url($this->thumbnail_url),
            'height' => 72,
            'width' => 72
        ] : null;
    }
    protected $casts = [
        'published_at' => 'datetime:c',
        'updated_at' => 'datetime:c',
        // 'links' => 'array'
    ];
    // public function getRouteKeyName()
    // {
    //     return 'slug'; // This tells Laravel to use "slug" instead of "id"
    // }


    protected $guarded = [];
}
