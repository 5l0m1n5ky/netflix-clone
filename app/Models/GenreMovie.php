<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenreMovie extends Model
{
    use HasFactory;

    protected $casts = [
        'movie_id' => 'integer',
        'genre_id' => 'integer'
    ];

    protected $table = "genre_movie";

    protected $fillable = ['movie_id', 'genre_id'];
}
