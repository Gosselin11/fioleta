<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artwork extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'reference',
        'short_description',
        'description',
        'price',
        'is_unique',
        'stock',
        'dimensions',
        'medium',
        'year_created',
        'main_image',
        'status',
        'is_visible',
        'is_featured',
        'published_at',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_unique' => 'boolean',
        'is_visible' => 'boolean',
        'is_featured' => 'boolean',
        'published_at' => 'datetime',
    ];

    public function images(): HasMany
    {
        return $this->hasMany(ArtworkImage::class);
    }
}
