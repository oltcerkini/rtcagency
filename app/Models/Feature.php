<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    protected $fillable = [
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
        'is_active'
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

    // Helper method to get all bullet points as array
    public function getBulletsAttribute()
    {
        return [
            [
                'number' => '01.',
                'title' => $this->bullet_title_1,
                'description' => $this->bullet_description_1,
                'icon' => $this->icon_1
            ],
            [
                'number' => '02.',
                'title' => $this->bullet_title_2,
                'description' => $this->bullet_description_2,
                'icon' => $this->icon_2
            ],
            [
                'number' => '03.',
                'title' => $this->bullet_title_3,
                'description' => $this->bullet_description_3,
                'icon' => $this->icon_3
            ]
        ];
    }
}