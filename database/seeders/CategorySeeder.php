<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['term' => 'technology', 'scheme' => 'tech', 'label' => 'Technology', 'created_at' => now(), 'updated_at' => now()],
            ['term' => 'health', 'scheme' => 'health', 'label' => 'Health', 'created_at' => now(), 'updated_at' => now()],
            ['term' => 'education', 'scheme' => 'edu', 'label' => 'Education', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
