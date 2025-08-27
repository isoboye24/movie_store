<?php
namespace App\Http\Controllers\front_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
 
class HomeController extends Controller {
    public function index() {
      return view('home.index');
    }
 
    // zeigt das Formular an
    public function create() {}
 
    // Speichert einen Film in der DB
    public function store(Request $request) {
       
    }
 
    // editiert einen Datensatz
    public function edit() {}
    public function update() {}
 
    // löscht einen Datensatz
    public function destroy() {}
}
 