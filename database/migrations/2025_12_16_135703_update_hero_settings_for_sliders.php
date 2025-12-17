<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('hero_settings', function (Blueprint $table) {
            // Rename columns to match your slider structure
            $table->renameColumn('button_1_text', 'button_text');
            $table->renameColumn('button_1_link', 'button_link');
            
            // Remove unnecessary columns
            $table->dropColumn(['button_2_text', 'button_2_link', 'foreground_image']);
            
            // Add shape image columns for your 3 floating shapes
            $table->string('shape_image_1')->nullable()->after('background_image');
            $table->string('shape_image_2')->nullable()->after('shape_image_1');
            $table->string('shape_image_3')->nullable()->after('shape_image_2');
            
            // Add order column for slider sequencing
            $table->integer('order')->default(0)->after('shape_image_3');
        });
    }

    public function down()
    {
        Schema::table('hero_settings', function (Blueprint $table) {
            // Reverse the changes
            $table->renameColumn('button_text', 'button_1_text');
            $table->renameColumn('button_link', 'button_1_link');
            
            $table->string('button_2_text')->nullable();
            $table->string('button_2_link')->nullable();
            $table->string('foreground_image')->nullable();
            
            $table->dropColumn(['shape_image_1', 'shape_image_2', 'shape_image_3', 'order']);
        });
    }
};