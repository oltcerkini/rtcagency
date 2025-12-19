<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('features', function (Blueprint $table) {
            // German translations for main content
            $table->string('title_german')->nullable()->after('title');
            $table->text('description_german')->nullable()->after('description');
            
            // German translations for bullet points
            $table->string('bullet_title_1_german')->nullable()->after('bullet_title_1');
            $table->text('bullet_description_1_german')->nullable()->after('bullet_description_1');
            $table->string('bullet_title_2_german')->nullable()->after('bullet_title_2');
            $table->text('bullet_description_2_german')->nullable()->after('bullet_description_2');
            $table->string('bullet_title_3_german')->nullable()->after('bullet_title_3');
            $table->text('bullet_description_3_german')->nullable()->after('bullet_description_3');
            
            // French translations for main content
            $table->string('title_french')->nullable()->after('title_german');
            $table->text('description_french')->nullable()->after('description_german');
            
            // French translations for bullet points
            $table->string('bullet_title_1_french')->nullable()->after('bullet_title_1_german');
            $table->text('bullet_description_1_french')->nullable()->after('bullet_description_1_german');
            $table->string('bullet_title_2_french')->nullable()->after('bullet_title_2_german');
            $table->text('bullet_description_2_french')->nullable()->after('bullet_description_2_german');
            $table->string('bullet_title_3_french')->nullable()->after('bullet_title_3_german');
            $table->text('bullet_description_3_french')->nullable()->after('bullet_description_3_german');
        });
    }

    public function down(): void
    {
        Schema::table('features', function (Blueprint $table) {
            $table->dropColumn([
                // German
                'title_german',
                'description_german',
                'bullet_title_1_german',
                'bullet_description_1_german',
                'bullet_title_2_german',
                'bullet_description_2_german',
                'bullet_title_3_german',
                'bullet_description_3_german',
                
                // French
                'title_french',
                'description_french',
                'bullet_title_1_french',
                'bullet_description_1_french',
                'bullet_title_2_french',
                'bullet_description_2_french',
                'bullet_title_3_french',
                'bullet_description_3_french'
            ]);
        });
    }
};