<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //    $author = Author::inRandomOrder()->first();
        //     $category = Category::inRandomOrder()->first();

        //     Post::create([
        //         'title' => 'The Future of AI',
        //         'content' => 'Artificial Intelligence is shaping the future of technology...',
        //         'thumbnail_url' => 'https://example.com/thumb1.jpg',
        //         'published_at' => now(),
        //         'author_id' => $author->id,
        //         'category_id' => $category->id,
        //         'links' => json_encode([
        //             ['rel' => 'self', 'href' => 'https://example.com/posts/1'],
        //             ['rel' => 'author', 'href' => 'https://example.com/authors/' . $author->id],
        //         ]),
        //     ]);

        Post::factory()->count(45)->create();
    }
}
