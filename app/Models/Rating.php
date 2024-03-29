<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $casts = [
        'movie_id' => 'integer',
        'rate' => 'integer'
    ];

    protected $table = "ratings";

    protected $fillable = ['movie_id', 'rate'];
}
