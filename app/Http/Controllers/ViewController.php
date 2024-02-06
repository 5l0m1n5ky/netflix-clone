<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;

class ViewController extends Controller
{
    public function index()
    {
        return view('home', [
            'movies' => Movie::latest()->filter(request(['search']))->get()
        ]);
    }

    public function play(Movie $movie)
    {
        return view('play-layout', [
            'movie_path' => $movie->media_path
        ]);
    }

    public function info(Movie $movie)
    {

        (float) $averageRating = DB::table('ratings')->where('movie_id', $movie->id)->avg('rate');

        return view('info', [
            'movie' => $movie,
            'genres' => $movie->genres,
            'rate' => $averageRating
        ]);
    }

    public function create()
    {
        return view('create', [
            'genres' => Genre::all()
        ]);
    }

    public function edit(Movie $movie)
    {
        return view('edit', [
            'movie' => $movie,
            'genres' => Genre::all(),
            'movieGenres' => $movie->genres->pluck('genre')->toArray()
        ]);
    }
}
