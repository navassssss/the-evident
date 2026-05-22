<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('frontend_sections', function (Blueprint $table) {
            $table->id();
            $table->string('name');               // Friendly name: "Top Banner"
            $table->string('area_image')->nullable(); // Uploaded image path
            $table->string('title')->nullable();  // Displayed on frontend
            $table->enum('type', ['latest', 'popular', 'category', 'featured'])->default('latest');
            $table->unsignedTinyInteger('trending_days')->nullable();
            $table->json('category_ids')->nullable(); // For multiple categories if 'category' type// For multiple categories if 'category' type
            $table->unsignedTinyInteger('post_limit')->default(6); // Number of posts
            $table->boolean('is_active')->default(true); // Show/hide section
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('frontend_sections');
    }
};
