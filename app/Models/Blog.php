<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'short_description',
        'description',
        'user_notes',
        'meta_keywords',
        'meta_description',
        'status',
    ];

    protected $casts = [
        'status' => 'boolean',
    ];

}
