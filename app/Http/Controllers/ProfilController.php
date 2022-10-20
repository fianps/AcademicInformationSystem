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
        return view('editprof.edit-profil',[
            // make variable to get operator data
            'operator' => DB::table('operators')->where('id', auth()->user()->id)->first(),
            
            // 'users' => DB::table('users')->get(),
            'title' => 'Edit Prof',
            // 'operators' => Operator::table('operators')->get(),
        ]);
    }

    // make create form method


    //make edit method to update operator table
    // public function update(Request $request, $id)
    // {
    //     // make variable to get operator data
    //     $operator = Operator::find($id);
    //     // make variable to get user data
    //     $user = User::find($id);

    //     // make variable to get request data
    //     $request->validate([
    //         'name' => 'required',
    //         'email' => 'required',
    //         'password' => 'required',
    //         'alamat' => 'required',
    //         'no_telp' => 'required',
    //         'foto' => 'required',
    //     ]);

    //     // make variable to get request data
    //     $operator->name = $request->name;
    //     $user->email = $request->email;
    //     $user->password = $request->password;
    //     $operator->alamat = $request->alamat;
    //     $operator->no_telp = $request->no_telp;
    //     $operator->foto = $request->foto;

    //     // save data to database
    //     $operator->save();
    //     $user->save();

    //     // redirect to operator page
    //     return redirect('/operator');
    // }


    public function update(Request $request, $id)
    {
        $operator = Operator::find($id);

        $request->validate([
            'nama' => 'required',
            'nip' => 'required',
            'email' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
        ]);

        $operator->nama = $request->nama;
        $operator->nip = $request->nip;
        $operator->email = $request->email;
        $operator->no_hp = $request->no_hp;
        $operator->alamat = $request->alamat;
        
        $operator->save();

        return redirect('/')->with('status', 'Data Operator Berhasil Diubah!');
    }
}
