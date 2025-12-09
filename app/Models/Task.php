<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', // Make sure this is here
        'description',
        'project_id',
        'assigned_to',
        'status',
        'priority',
        'due_date',
        'sort_order',
        'labels',
        'attachments',
        'is_completed',
        'completed_at',
    ];

    protected $casts = [
        'labels' => 'array',
        'attachments' => 'array',
        'due_date' => 'date',
        'completed_at' => 'datetime',
        'is_completed' => 'boolean',
    ];
}