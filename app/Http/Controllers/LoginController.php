<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // make index method
    public function index()
    {
        return view('auth.login',[
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    // make authenticate method
    public function authenticate(Request $request)
    {
        // validate data
        $validatedData = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:5|max:20'
        ]);

        // check email and password
        if (auth()->attempt($validatedData)) {
            $request->session()->regenerate();
            // redirect to operator page
            return redirect('/')->content('operator');
        }

        // redirect to login page
        return back()->with('error','Login failed, please try again');
    }
    // make logout method
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        // redirect to login page
        return redirect('/login');
    }
}
