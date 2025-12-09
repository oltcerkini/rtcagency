<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    use HasFactory;

    protected $table = 'about_us';

    protected $fillable = [
        // English
        'title',
        'description1',
        'description2',
        
        // German
        'title_german',
        'description1_german',
        'description2_german',
        
        // French
        'title_french',
        'description1_french',
        'description2_french',
        
        // Images and settings
        'image1',
        'image2',
        'sort_order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
    
    // Helper methods to get translated content
    public function getTranslatedTitleAttribute()
    {
        $locale = app()->getLocale();
        
        return match($locale) {
            'de' => $this->title_german ?? $this->title,
            'fr' => $this->title_french ?? $this->title,
            default => $this->title,
        };
    }
    
    public function getTranslatedDescription1Attribute()
    {
        $locale = app()->getLocale();
        
        return match($locale) {
            'de' => $this->description1_german ?? $this->description1,
            'fr' => $this->description1_french ?? $this->description1,
            default => $this->description1,
        };
    }
    
    public function getTranslatedDescription2Attribute()
    {
        $locale = app()->getLocale();
        
        return match($locale) {
            'de' => $this->description2_german ?? $this->description2,
            'fr' => $this->description2_french ?? $this->description2,
            default => $this->description2,
        };
    }
}