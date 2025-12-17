<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slogan',
        'description',
        'category',
        'image_1',
        'image_2',
        'order',
        'is_published'
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
}