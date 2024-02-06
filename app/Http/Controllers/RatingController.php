<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Rating;
use Illuminate\Http\Request;

class RatingController extends Controller
{
    public function rating(Request $request, Movie $movie)
    {
        Rating::create([
            'movie_id' => $movie->id,
            'rate' => $request->rate
        ]);

        return back();
    }
}
