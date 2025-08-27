<?php
 
namespace App\Http\Controllers\front_pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller {
    public function logout() {
        Auth::logout();
        return redirect('/register');
    }

    public function register(Request $request) {
        $fieldData = $request->validate([
            'name' => ['required', 'min:3', 'max:15', Rule::unique('users', 'name')],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:8', 'max:200'],
        ]);

        $fieldData['password'] = bcrypt($fieldData['password']);
        $user = User::create($fieldData);
        Auth::login($user);

        return redirect('/');
    }
    
}
 