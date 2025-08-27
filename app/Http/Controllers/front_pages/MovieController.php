<?php
namespace App\Http\Controllers\front_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;
use Illuminate\Support\Facades\DB;

class MovieController extends Controller {
    /**
     * Display a listing of the resource.
     */
    public function index() {
        $movies = Movie::all();
        return view('movies.index', compact('movies'));
    }
 
   /**
     * Since the show the form on the index page, we just redirect to it
     */
    public function create() {
        
    }
    
    /**
     * Store a newly created resource in storage.
    */
    public function store(StoreMovieRequest $request) {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }
 
    /**
     * Show the form for editing the specified resource.
     */
    public function edit() {
        
    }

    public function update() {
        
    }
 
    // löscht einen Datensatz
    public function destroy() {
       
    }
 
 
}
 