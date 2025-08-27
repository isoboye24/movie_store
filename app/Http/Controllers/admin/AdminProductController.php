<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index() {
        return view('admin.products.index');
    }

    public function create() {
        
    }

    public function store(Request $request) {
        
    }

    public function show(string $id)
    {
    }
 
    // editiert einen Datensatz
    public function edit() {}
    public function update() {}
 
    // löscht einen Datensatz
    public function destroy() {}
 
}
