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
        return view('edit.edit-profil',[
            'title' => 'Edit Profil',
            'operator' => Operator::where('id', auth()->user()->id)->first(),
        ]);
    }


    public function update(Request $request, $id)
    {
        $operator = Operator::find($id);

        $request->validate([
            // 'nama' => 'required',
            // 'nip' => 'required',
            // 'email' => 'required',
            'no_hp' => 'required|numeric',
            'alamat' => 'required',
        ]);
        
        $operator->update([
            // 'nama' => $request->nama,
            // 'nip' => $request->nip,
            // 'email' => $request->email,
            'no_hp' => $request->no_hp,
            'alamat' => $request->alamat,
        ]);
        

        return redirect('/')->with('status', 'Data Operator Berhasil Diubah!');
    }
}
