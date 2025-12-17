<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HeroSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'button_text',      // Changed from button_1_text
        'button_link',      // Changed from button_1_link
        'background_image',
        'shape_image_1',    // New
        'shape_image_2',    // New
        'shape_image_3',    // New
        'order',            // New
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    // Get all active slides ordered
    public static function getActiveSlides()
    {
        return static::where('is_active', true)
            ->orderBy('order')
            ->orderBy('created_at', 'desc')
            ->get();
    }

    // Scope for active slides
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Scope for ordering
    public function scopeOrdered($query)
    {
        return $query->orderBy('order')->orderBy('created_at', 'desc');
    }
}