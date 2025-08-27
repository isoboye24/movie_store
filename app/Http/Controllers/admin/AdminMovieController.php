<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;
use Illuminate\Http\Request;

class AdminMovieController extends Controller
{
    public function index() {
        $movies = Movie::all();
        return view('admin.movies.index', compact('movies'));
    }

    public function create() {
        return view('admin.movies.create');
    }

    public function store(StoreMovieRequest $request) {
        $movieData = $request->validated();
        Movie::create($movieData);
        return view('admin.movies.index')->with('success', 'Movie created!');
    }

    public function show(string $id)
    {
        $movie = Movie::find($id);
        return view('admin.movies.show', compact('movie'));
    }
 
    public function edit(string $id)
    {   
        $movie = Movie::find($id);
        return view('admin.movies.edit', compact('movie'));
    }

    public function update(StoreMovieRequest $request, Movie $movie)
    {
        $validated = $request->validated();
        $movie->update($validated);
        return redirect()->route('admin.movies.index')
                         ->with('success', 'Film wurde aktualisiert!');
    }

    public function destroy(StoreMovieRequest $request, Movie $movie)
    {
        $movie->delete();
        return redirect()->route('admin.movies.index')
                         ->with('success', 'Film wurde gelöscht!');
    }
}
