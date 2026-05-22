<?php

use App\Http\Controllers\HomeController;
use App\Models\Category;
use App\Models\FrontendSection;
use App\Models\Post;
use App\Models\Edition;
use App\Models\Section;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
Route::get('/create-admin', function () {
    $user = User::updateOrCreate(
            ['email' => 'admin@evidentmonthly.in'],
                    [
                                'name' => 'Admin',
                                            'password' => Hash::make('Civil@2025'),
                                                    ]
                                                        );

                                                            return "User created/updated: {$user->email} at " . now();
                                                            });
Route::get('/inaugurate', function () {
    return view('welcome');
});

Route::get('/indexnow-submit', function () {
    $host = 'www.evidentmonthly.in';
    $key = '4dc0dc9e9f164c0f9f9a31c2d2ffe7b2';
    $keyLocation = "https://www.evidentmonthly.in/{$key}.txt";

    // Fetch posts
    $posts = Post::with('category')->get();

    // Create URL list
    $urlList = [];
    foreach ($posts as $post) {
        $urlList[] = "https://www.evidentmonthly.in/{$post->category->scheme}/{$post->slug}";
    }

    $data = [
        "host" => $host,
        "key" => $key,
        "keyLocation" => $keyLocation,
        "urlList" => $urlList,
    ];

    $response = Http::withHeaders([
        'Content-Type' => 'application/json'
    ])->post('https://api.indexnow.org/indexnow', $data);

    return [
        'submitted_urls' => $urlList,
        'status' => $response->status(),
        'response' => $response->body()
    ];
});

Route::get('/editions/{edition:slug}', function (Edition $edition) {
    return redirect()->away($edition->url);
})->name('home.edition');

Route::get('/sitemap', function(){
Artisan::call('sitemap:generate');
return("sitemap generated");
});
Route::get('/checkit', function(){
// Artisan::call('migrate:rollback');
// Artisan::call('vendor:publish --force --tag=livewire:assets');
// Artisan::call('filament:assets');
// php artisan config:clear
// php artisan optimize:clear


// Artisan::call('route:cache');
// Artisan::call('session:table');
Artisan::call('optimize:clear');

// 

$output = Artisan::output(); // Get CLI output as string

    return nl2br($output);
});

Route::get('/make-section-resource', function () {
    Artisan::call('make:filament-resource Section --generate');

    return nl2br(Artisan::output());
});

Route::get('/run-setup', function () {
    // Run migrations
    // Artisan::call('migrate', ['--force' => true]);

    // // Create Filament admin user
    // if (!User::where('email', 'admin@evidentmontly.in')->exists()) {
    //     $user = User::create([
    //         'name' => 'Civil Admin',
    //         'email' => 'admin@evidentmontly.in',
    //         'password' => Hash::make('Civil@2025'),
    //     ]);
    // }

    // Create symbolic link to storage
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
    // Artisan::call('optimize');
    // Artisan::call('storage:link');

    return '✅ Setup complete. Migrations run, user created, and storage linked.';
});

Route::get('/searchjson', [HomeController::class, 'searchJson'])->name('search.json');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/category/{category:term}', [HomeController::class, 'categoryShow'])->name('category.show');

Route::get('/{category:scheme}/{post:slug}', [HomeController::class, 'show'])->name('home.show');
// about-us
Route::get('/about-us', function () {
    $topCategories = Category::withCount('posts')
        ->orderByDesc('posts_count')
        ->take(3)
        ->get();
        $sections = Section::with('categories')
            ->get();
    return view('about', compact('topCategories', 'sections'));
})->name('about');
Route::get('/privacy-policy', function () {
    $topCategories = Category::withCount('posts')
        ->orderByDesc('posts_count')
        ->take(3)
        ->get();
        $sections = Section::with('categories')
            ->get();
    return view('privacy', compact('topCategories', 'sections'));
})->name('privacy');
Route::get('/terms-and-conditions', function () {
    $topCategories = Category::withCount('posts')
        ->orderByDesc('posts_count')
        ->take(3)
        ->get();
        $sections = Section::with('categories')
            ->get();
    return view('terms', compact('topCategories', 'sections'));
})->name('terms');
Route::get('/cookies', function () {
    $topCategories = Category::withCount('posts')
        ->orderByDesc('posts_count')
        ->take(3)
        ->get();
        $sections = Section::with('categories')
            ->get();
    return view('cookie', compact('topCategories', 'sections'));
})->name('cookie');
// contact
Route::get('/contact', function () {
    $topCategories = Category::withCount('posts')
        ->orderByDesc('posts_count')
        ->take(3)
        ->get();
        $sections = Section::with('categories')
            ->get();
    return view('contact', compact('topCategories', 'sections'));
})->name('contact');

Route::get('/json', [HomeController::class, 'getHomeFeedSection'])->name('home.feed.section');
Route::get('/{section:slug}', [HomeController::class, 'sectionShow'])->name('section.show');

Route::get('/', function () {

    return Cache::rememberForever('homepage_html', function () {

        $topCategories = Category::withCount('posts')
            ->orderByDesc('posts_count')
            ->take(3)
            ->get();

        $sections = Section::with('categories')->get();

        return view('index', compact('topCategories', 'sections'))->render();
    });

});

Route::get('/feed', [HomeController::class, 'feed'])->name('feed');
