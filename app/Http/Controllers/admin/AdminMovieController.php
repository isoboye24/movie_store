<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMovieRequest;
use App\Models\Director;
use App\Models\Movie;
use Illuminate\Http\Request;

class AdminMovieController extends Controller
{
    public function index() {
        $movies = Movie::all();
        return view('admin.movies.index', compact('movies'));
    }

    public function create() {
        $directors = Director::all();
        return view('admin.movies.create', compact('directors'));
    }

    public function store(StoreMovieRequest $request) {
        $movieData = $request->validated();
        Movie::create($movieData);
        return redirect()->route('admin.movies.index')->with('success', 'Director wurde erstellt!');
    }

    public function show(string $id)
    {
       $movie = Movie::with('director')->findOrFail($id);
        return view('admin.movies.show', compact('movie'));
    }
 
    public function edit(string $id)
    {   
        $movie = Movie::find($id);
        $directors = Director::all();
        return view('admin.movies.edit', compact('movie', 'directors'));
    }

    public function update(StoreMovieRequest $request, Movie $movie)
    {
        $validated = $request->validated();
        $movie->update($validated);
        return redirect()->route('admin.movies.index')
                         ->with('success', 'Film wurde aktualisiert!');
    }

    public function destroy(Movie $movie)
    {
        $movie->delete();
        return redirect()->route('admin.movies.index')
                         ->with('success', 'Film wurde gelöscht!');
    }
}
