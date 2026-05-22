<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::insert([
            ['name' => 'Alice Johnson', 'email' => 'alice@example.com', 'image_url' => null, 'about' => 'Tech writer.', 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bob Smith', 'email' => 'bob@example.com', 'image_url' => null, 'about' => 'Health specialist.', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
