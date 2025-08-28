<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreDirectorRequest;
use App\Models\Director;
use Illuminate\Http\Request;

class AdminDirectorController extends Controller
{
    public function index() {
        $directors = Director::all();
        return view('admin.directors.index', compact('directors'));
    }

    public function create() {
        return view('admin.directors.create');
    }

    public function store(StoreDirectorRequest $request) {
        $directorData = $request->validated();
        Director::create($directorData);
        return redirect()->route('admin.directors.index')->with('success', 'Director wurde gelöscht!');
    }

    public function show(string $id)
    {
        $director = Director::find($id);
        return view('admin.directors.show', compact('director'));
    }
    
    public function edit(string $id)
    {   
        $director = Director::find($id);
        return view('admin.directors.edit', compact('director'));
    }

    public function update(StoreDirectorRequest $request, Director $director)
    {
        $validated = $request->validated();
        $director->update($validated);
        return redirect()->route('admin.directors.index')
                         ->with('success', 'Regisseur wurde aktualisiert!');
    }
    public function destroy(Director $director)
    {
        $director->delete();
        return redirect()->route('admin.directors.index')
                         ->with('success', 'Regisseur wurde gelöscht!');
    }
}
