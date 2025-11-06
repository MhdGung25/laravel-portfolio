<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'url',
    ];

    // Short excerpt helper for listings
    public function getExcerptAttribute()
    {
        if (! $this->description) {
            return '';
        }

        return strlen($this->description) > 150
            ? substr($this->description, 0, 147) . '...'
            : $this->description;
    }
}
