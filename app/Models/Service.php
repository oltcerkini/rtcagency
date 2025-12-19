<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'title_german',      // Added
        'title_french',      // Added
        'slug',
        'description',
        'description_german', // Added
        'description_french', // Added
        'content',
        'content_german',    // Added
        'content_french',    // Added
        'icon',
        'image',
        'sort_order',
        'is_active',
        'featured'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'featured' => 'boolean'
    ];

    // Scopes
    public function scopePublished($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('featured', true);
    }

    public function scopeOrdered($query)
    {
        return $query->orderBy('sort_order')->orderBy('created_at', 'desc');
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
    
    public function getTranslatedContentAttribute()
    {
        $locale = session('locale', 'en');
        
        return match($locale) {
            'de' => $this->content_german ?? $this->content,
            'fr' => $this->content_french ?? $this->content,
            default => $this->content,
        };
    }
}