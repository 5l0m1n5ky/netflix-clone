<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateRequest;
use Illuminate\Support\Facades\Storage;

class MovieController extends Controller
{

    public function store(StoreRequest $request)
    {
        $validatedData = $request->validated();

        $validatedData['media_path'] = $request->file('media_path')->store('media', 'public');

        $validatedData['cover'] =  $request->file('cover')->store('media', 'public');

        $movie = Movie::create($validatedData);

        $movie->genres()->sync($request->genre);

        return redirect('/');
    }

    public function update(UpdateRequest $request, Movie $movie)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('media_path')) {
            $validatedData['media_path'] = $request->file('media_path')->store('media', 'public');
        } else {
            $validatedData['media_path'] = $movie->media_path;
        }

        if ($request->hasFile('cover')) {
            $validatedData['cover'] = $request->file('cover')->store('media', 'public');
        } else {
            $validatedData['cover'] = $movie->cover;
        }

        $movie->genres()->sync($request->genre);

        $movie->update($validatedData);

        return back();
    }

    public function destroy(Movie $movie)
    {
        if (Storage::disk('public')->exists($movie->media_path)) {
            Storage::disk('public')->delete($movie->media_path);
        }

        if (Storage::disk('public')->exists($movie->cover)) {
            Storage::disk('public')->delete($movie->cover);
        }

        $movie->delete();

        return back();
    }
}
