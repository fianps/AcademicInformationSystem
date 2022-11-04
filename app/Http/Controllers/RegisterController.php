<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\IRS;
use App\Models\KHS;
use App\Models\Mahasiswa;
use App\Models\PKL;
use App\Models\Skripsi;

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
            'kode_wali' => 'nullable',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:20'
        ]);

        // encrypt password
        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);
        if ($validatedData['role'] == 'mahasiswa') {
            if (Mahasiswa::where('email', $validatedData['email'])->doesntExist()) {
                Mahasiswa::create([
                    'nama' => $validatedData['name'],
                    'email' => $validatedData['email'],
                    'kode_wali' => $validatedData['kode_wali'],
                    'status' => 'Belum Disetujui',
                ]);
            }
            // store data to IRS, KHS, PKL, and Skripsi table
            IRS::create([
                'email' => $validatedData['email'],
            ]);
            KHS::create([
                'email' => $validatedData['email'],
            ]);
            PKL::create([
                'email' => $validatedData['email'],
                'status' => 'Belum',
            ]);
            Skripsi::create([
                'email' => $validatedData['email'],
                'status' => 'Belum Ambil',
            ]);
        }

        // redirect to login page
        return redirect('/login')->with('success','Register success, please login');
    } 
}
