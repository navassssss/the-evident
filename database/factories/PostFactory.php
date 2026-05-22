<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Post::class;

    public function definition(): array
    {
        $title = $this->faker->sentence();

        return [
            'title' => $title,
            'content' => $this->faker->paragraphs(3, true),
            'is_published' => $this->faker->boolean(70), // 70% chance to be true
            'views' => $this->faker->numberBetween(0, 1000),
            'thumbnail_url' => $this->faker->imageUrl(640, 480, 'posts', true),
            'published_at' => $this->faker->optional()->dateTimeBetween('-1 year', 'now'),
            'author_id' => Author::inRandomOrder()->value('id'),     // ✅ random existing user
            'category_id' => Category::inRandomOrder()->value('id'), // assumes Category factory exists
            'links' => json_encode([
                'youtube' => $this->faker->url(),
                'external' => $this->faker->url(),
            ]),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
