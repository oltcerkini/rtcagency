<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',           // Your table has this
        'description',
        'content',        // Your table has this
        'icon',           // Your table has this
        'image',          // Your table has this
        'sort_order',     // Your table has this
        'is_active',      // Your table has this
        'featured'        // Your table has this
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'featured' => 'boolean'
    ];

    // Scopes using YOUR column names
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
}