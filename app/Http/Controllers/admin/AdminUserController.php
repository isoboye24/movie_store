<?php
 
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminUserController extends Controller {    
    public function index() {
        return view('admin.users.index');
    }

    public function create() {
        
    }

    public function store(Request $request) {
        
    }

    public function show(string $id)
    {
    }
 
    public function edit() {}
    public function update() {}
    public function destroy() {}
    
}
 