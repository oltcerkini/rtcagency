<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'translation_key', // Add this
        'title',
        'subtitle',
        'image',
        'order',
        'is_active',
        'button_text',
        'button_link'
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    // Add accessors for translated content
    public function getTranslatedTitleAttribute()
    {
        $locale = session('locale', 'en');
        
        // If we have a translation key, use the language file
        if ($this->translation_key && $locale !== 'en') {
            $key = $this->translation_key . '_title';
            $translation = trans("slider.$key", [], $locale);
            
            // If translation exists and is not the key itself, return it
            if ($translation !== "slider.$key") {
                return $translation;
            }
        }
        
        // Fallback to database English title
        return $this->title;
    }
    
    public function getTranslatedSubtitleAttribute()
    {
        $locale = session('locale', 'en');
        
        // If we have a translation key, use the language file
        if ($this->translation_key && $locale !== 'en') {
            $key = $this->translation_key . '_subtitle';
            $translation = trans("slider.$key", [], $locale);
            
            // If translation exists and is not the key itself, return it
            if ($translation !== "slider.$key") {
                return $translation;
            }
        }
        
        // Fallback to database English subtitle
        return $this->subtitle;
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }
}