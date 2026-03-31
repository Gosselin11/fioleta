<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('artworks', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug')->unique();

            $table->string('reference')->nullable();

            $table->text('short_description')->nullable();
            $table->longText('description')->nullable();

            $table->decimal('price', 10, 2)->nullable();

            $table->boolean('is_unique')->default(true);
            $table->unsignedInteger('stock')->default(1);

            $table->string('dimensions')->nullable();
            $table->string('medium')->nullable();
            $table->year('year_created')->nullable();

            $table->string('main_image')->nullable();

            $table->enum('status', ['draft', 'published', 'archived', 'sold'])->default('draft');
            $table->boolean('is_visible')->default(true);
            $table->boolean('is_featured')->default(false);

            $table->timestamp('published_at')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('artworks');
    }
};
