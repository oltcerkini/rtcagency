<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        // English
        'title',
        'slogan',
        'description',
        'category',
        'image_1',
        'image_2',
        'order',
        'is_published',
        
        // German
        'title_german',
        'slogan_german',
        'category_german',
        'description_german',
        
        // French
        'title_french',
        'slogan_french',
        'category_french',
        'description_french'
    ];

    protected $casts = [
        'is_published' => 'boolean'
    ];

    // Scope for published projects
    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    // Scope for ordering
    public function scopeOrdered($query)
    {
        return $query->orderBy('order')->orderBy('created_at', 'desc');
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
    
    public function getTranslatedSloganAttribute()
    {
        $locale = session('locale', 'en');
        
        return match($locale) {
            'de' => $this->slogan_german ?? $this->slogan,
            'fr' => $this->slogan_french ?? $this->slogan,
            default => $this->slogan,
        };
    }
    
    public function getTranslatedCategoryAttribute()
    {
        $locale = session('locale', 'en');
        
        return match($locale) {
            'de' => $this->category_german ?? $this->category,
            'fr' => $this->category_french ?? $this->category,
            default => $this->category,
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
}