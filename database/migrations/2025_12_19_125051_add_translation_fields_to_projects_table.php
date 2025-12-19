<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            // German translations
            $table->string('title_german')->nullable()->after('title');
            $table->string('slogan_german')->nullable()->after('slogan');
            $table->string('category_german')->nullable()->after('category');
            $table->text('description_german')->nullable()->after('description');
            
            // French translations
            $table->string('title_french')->nullable()->after('title_german');
            $table->string('slogan_french')->nullable()->after('slogan_german');
            $table->string('category_french')->nullable()->after('category_german');
            $table->text('description_french')->nullable()->after('description_german');
        });
    }

    public function down(): void
    {
        Schema::table('projects', function (Blueprint $table) {
            $table->dropColumn([
                'title_german',
                'slogan_german',
                'category_german',
                'description_german',
                'title_french',
                'slogan_french',
                'category_french',
                'description_french'
            ]);
        });
    }
};