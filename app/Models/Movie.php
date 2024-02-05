<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;

    protected $table = "movie";

    protected $fillable = ['id', 'title', 'cover', 'description', 'production', 'media_path'];

    public function scopeFilter($query)
    {
        $query->where('title', 'like', '%' . request('search') . '%');
    }

    public function genres()
    {
        return $this->belongsToMany(Genre::class, 'movie_genre', 'movie_id', 'genre_id');
    }

    public function ratings()
    {
        return $this->hasMany(Rating::class);
    }
}
