<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'start_date',
        'end_date',
        'location',
        'cover_image',
        'status',
        'is_featured',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
        'is_featured' => 'boolean',
    ];

    public function getRouteKeyName(): string
{
    return 'slug';
}
}
