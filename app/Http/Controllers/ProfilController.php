<?php

namespace App\Http\Controllers;

use App\Models\Operator;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    //make view to edit profil
    public function index()
    {
        return view('operator',[
            'users' => DB::table('users')->get(),
            'title' => 'PPL',
            'operators' => DB::table('operators')->get(),
        ]);
    }

    // make create form method


    //make update method
    public function update(Request $request)
    {
        // validate data
        $validatedData = $request->validate([
            'name' => 'required',
            'nip' => 'required|min:5|max:20',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:20'
        ]);

        // encrypt password
        $validatedData['password'] = bcrypt($validatedData['password']);

        Operator::create($validatedData);

        // redirect to login page
        return redirect('/login')->with('success','Register success, please login');
    }
}
