<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $casts = [
        'title' => 'string',
        'cover' => 'string',
        'description' => 'string',
        'production' => 'string',
        'media_path' => 'string'
    ];

    protected $table = "movies";

    protected $fillable = ['title', 'cover', 'description', 'production', 'media_path'];

    public function scopeFilter($query)
    {
        $query->where('title', 'like', '%' . request('search') . '%');
    }

    public function genres(): object
    {
        return $this->belongsToMany(Genre::class, 'genre_movie', 'movie_id', 'genre_id')->withTimestamps();
    }

    public function ratings(): object
    {
        return $this->hasMany(Rating::class);
    }
}
