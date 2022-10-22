<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    // make index method
    public function index()
    {
        return view('register.index',[
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    // make store method
    public function store(Request $request)
    {
        // validate data
        $validatedData = $request->validate([
            'name' => 'required',
            'role' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:20'
        ]);

        // encrypt password
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        // redirect to login page
        return redirect('/login')->with('success','Register success, please login');
    } 
}
