<?php


namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use App\Models\Director;
use Illuminate\Http\Request;

class AdminDirectorController extends Controller
{
    public function index() {
        $directors = Director::all();
        return view('admin.directors.index', compact('directors'));
    }
}
