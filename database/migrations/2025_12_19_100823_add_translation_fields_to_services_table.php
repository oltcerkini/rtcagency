<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('services', function (Blueprint $table) {
            // German translations
            $table->string('title_german')->nullable()->after('title');
            $table->text('description_german')->nullable()->after('description');
            $table->longText('content_german')->nullable()->after('content');
            
            // French translations
            $table->string('title_french')->nullable()->after('title_german');
            $table->text('description_french')->nullable()->after('description_german');
            $table->longText('content_french')->nullable()->after('content_german');
        });
    }

    public function down(): void
    {
        Schema::table('services', function (Blueprint $table) {
            $table->dropColumn([
                'title_german',
                'description_german',
                'content_german',
                'title_french',
                'description_french',
                'content_french'
            ]);
        });
    }
};