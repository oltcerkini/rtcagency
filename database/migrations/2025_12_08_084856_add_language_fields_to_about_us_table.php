<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('about_us', function (Blueprint $table) {
            // For Title
            $table->string('title_german')->nullable()->after('title');
            $table->string('title_french')->nullable()->after('title_german');
            
            // For Description 1
            $table->text('description1_german')->nullable()->after('description1');
            $table->text('description1_french')->nullable()->after('description1_german');
            
            // For Description 2
            $table->text('description2_german')->nullable()->after('description2');
            $table->text('description2_french')->nullable()->after('description2_german');
        });
    }

    public function down(): void
    {
        Schema::table('about_us', function (Blueprint $table) {
            $table->dropColumn([
                'title_german',
                'title_french',
                'description1_german',
                'description1_french',
                'description2_german',
                'description2_french',
            ]);
        });
    }
};