<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('hero_settings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('subtitle')->nullable();
            $table->text('description')->nullable();
            $table->string('button_1_text')->nullable();
            $table->string('button_1_link')->nullable();
            $table->string('button_2_text')->nullable();
            $table->string('button_2_link')->nullable();
            $table->string('background_image')->nullable();
            $table->string('foreground_image')->nullable(); // Optional: image on the right side
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('hero_settings');
    }
};