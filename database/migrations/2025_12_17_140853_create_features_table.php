<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('features', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Main title
            $table->text('description'); // Main description
            $table->string('image')->nullable(); // Main image
            
            // Bullet points (3 as requested)
            $table->string('bullet_title_1');
            $table->text('bullet_description_1');
            $table->string('bullet_title_2');
            $table->text('bullet_description_2');
            $table->string('bullet_title_3');
            $table->text('bullet_description_3');
            
            // Icons for bullet points (optional)
            $table->string('icon_1')->default('icon-advertising');
            $table->string('icon_2')->default('icon-app');
            $table->string('icon_3')->default('icon-analytics');
            
            $table->integer('order')->default(0);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('features');
    }
};