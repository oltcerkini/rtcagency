<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
        // English
        'title',
        'description',
        'image',
        'bullet_title_1',
        'bullet_description_1',
        'bullet_title_2',
        'bullet_description_2',
        'bullet_title_3',
        'bullet_description_3',
        'icon_1',
        'icon_2',
        'icon_3',
        'order',
        'is_active',
        
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
    ];

    protected $casts = [
        'is_active' => 'boolean'
    ];

    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('order');
    }
    
    // Translation accessors
    public function getTranslatedTitleAttribute()
    {
        $locale = session('locale', 'en');
        
        return match($locale) {
            'de' => $this->title_german ?? $this->title,
            'fr' => $this->title_french ?? $this->title,
            default => $this->title,
        };
    }
    
    public function getTranslatedDescriptionAttribute()
    {
        $locale = session('locale', 'en');
        
        return match($locale) {
            'de' => $this->description_german ?? $this->description,
            'fr' => $this->description_french ?? $this->description,
            default => $this->description,
        };
    }
    
    // Helper methods for translated bullet points
    public function getTranslatedBulletTitle1Attribute()
    {
        $locale = session('locale', 'en');
        
        return match($locale) {
            'de' => $this->bullet_title_1_german ?? $this->bullet_title_1,
            'fr' => $this->bullet_title_1_french ?? $this->bullet_title_1,
            default => $this->bullet_title_1,
        };
    }
    
    public function getTranslatedBulletDescription1Attribute()
    {
        $locale = session('locale', 'en');
        
        return match($locale) {
            'de' => $this->bullet_description_1_german ?? $this->bullet_description_1,
            'fr' => $this->bullet_description_1_french ?? $this->bullet_description_1,
            default => $this->bullet_description_1,
        };
    }
    
    public function getTranslatedBulletTitle2Attribute()
    {
        $locale = session('locale', 'en');
        
        return match($locale) {
            'de' => $this->bullet_title_2_german ?? $this->bullet_title_2,
            'fr' => $this->bullet_title_2_french ?? $this->bullet_title_2,
            default => $this->bullet_title_2,
        };
    }
    
    public function getTranslatedBulletDescription2Attribute()
    {
        $locale = session('locale', 'en');
        
        return match($locale) {
            'de' => $this->bullet_description_2_german ?? $this->bullet_description_2,
            'fr' => $this->bullet_description_2_french ?? $this->bullet_description_2,
            default => $this->bullet_description_2,
        };
    }
    
    public function getTranslatedBulletTitle3Attribute()
    {
        $locale = session('locale', 'en');
        
        return match($locale) {
            'de' => $this->bullet_title_3_german ?? $this->bullet_title_3,
            'fr' => $this->bullet_title_3_french ?? $this->bullet_title_3,
            default => $this->bullet_title_3,
        };
    }
    
    public function getTranslatedBulletDescription3Attribute()
    {
        $locale = session('locale', 'en');
        
        return match($locale) {
            'de' => $this->bullet_description_3_german ?? $this->bullet_description_3,
            'fr' => $this->bullet_description_3_french ?? $this->bullet_description_3,
            default => $this->bullet_description_3,
        };
    }

    // Updated helper method to get all translated bullet points as array
    public function getBulletsAttribute()
    {
        return [
            [
                'number' => '01.',
                'title' => $this->translated_bullet_title_1,
                'description' => $this->translated_bullet_description_1,
                'icon' => $this->icon_1
            ],
            [
                'number' => '02.',
                'title' => $this->translated_bullet_title_2,
                'description' => $this->translated_bullet_description_2,
                'icon' => $this->icon_2
            ],
            [
                'number' => '03.',
                'title' => $this->translated_bullet_title_3,
                'description' => $this->translated_bullet_description_3,
                'icon' => $this->icon_3
            ]
        ];
    }
}