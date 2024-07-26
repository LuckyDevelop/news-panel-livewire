<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;
    protected $table = 'news';
    protected $fillable = [
        'title',
        'content',
        'author',
        'published_at'
    ];
    protected $casts = [
        'published_at' => 'datetime',
    ];
}