<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use App\Models\Rating;
use Illuminate\Http\Request;
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

        (float) $averageRating = DB::table('rating')->where('movie_id', $movie->id)->avg('rate');

        return view('info', [
            'movie' => $movie,
            'genres' => $movie->genres,
            'rate' => $averageRating
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
    public function delete(Movie $movie)
    {
        $movie->delete();

        return back();
    }

    public function editData(Request $request, Movie $movie)
    {

        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'production' => 'required',
            'media_path' => 'required',
            'cover' => 'required',
            'genre' => 'required|min:1'
        ]);

        $movie->genres()->sync($request->genre);

        if ($request->hasFile('media_path')) {
            $formFields['media_path'] = 'storage/' . $request->file('media_path')->store('media', 'public');
        } else {
            $formFields['media_path'] = $movie->media_path;
        }

        if ($request->hasFile('cover')) {
            $formFields['cover'] = 'storage/' . $request->file('cover')->store('media', 'public');
        } else {
            $formFields['cover'] = $movie->cover;
        }

        $movie->update($formFields);

        return back();
    }

    public function createMovie()
    {
        return view('create', [
            'genres' => Genre::all()
        ]);
    }

    public function create(Request $request)
    {

        $formFields = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'production' => 'required',
            'media_path' => 'required',
            'cover' => 'required',
            'genre' => 'required|min:1'
        ]);

        if ($request->hasFile('media_path')) {
            $formFields['media_path'] = 'storage/' . $request->file('media_path')->store('media', 'public');
        }

        if ($request->hasFile('cover')) {
            $formFields['cover'] = 'storage/' . $request->file('cover')->store('media', 'public');
        }

        $movie = Movie::create($formFields);

        $movie->genres()->sync($request->genre);

        return redirect('/');
    }

    public function rating(Request $request, Movie $movie)
    {

        Rating::create([
            'movie_id' => $movie->id,
            'rate' => $request->rate
        ]);

        return back();
    }
}
