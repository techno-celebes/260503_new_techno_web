<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Post extends Model
{
    protected $fillable = ['user_id', 'title', 'content', 'image', 'tags'];

    protected $casts = [
        'tags' => 'array',
    ];

    public function getTagsArrayAttribute(): array
    {
        return is_array($this->tags) ? $this->tags : [];
    }

    public function scopeRelated($query, Post $currentPost, int $limit = 4)
    {
        return $query->where('id', '!=', $currentPost->id)
            ->latest()
            ->limit($limit);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
