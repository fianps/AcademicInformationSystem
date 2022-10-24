<?php

namespace App\Http\Controllers;

use App\Models\KHS;
use Illuminate\Http\Request;

class KHSController extends Controller
{
    //make function to show data
    public function index()
    {
        $khs = KHS::where('email', auth()->user()->email)->first();
        return view('mahasiswa.khs', [
            'title' => 'Data KHS',
            'khs' => $khs
        ]);
    }

    // make function to edit data
    public function edit($id)
    {
        $khs = KHS::find($id);
        return view('mahasiswa.edit.khs', [
            'title' => 'Edit KHS',
            'khs' => $khs
        ]);
    }
    // make function to update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'semester' => 'required',
            'sks_smt' => 'required',
            'sks_total' => 'required',
            'ips' => 'required',
            'ipk' => 'required',
            'file_khs' => 'required',
        ]);

        $input = $request->all();
        if($request->hasFile('file_khs')){
            // get original file name
            $fileName = $request->file('file_khs')->getClientOriginalName();
            // upload file
            $request->file('file_khs')->storeAs('public/khs', $fileName);
            $input['file_khs'] = $fileName;
        }
        $khs = KHS::find($id);
        $khs->update($input);

        return redirect('/khs')->with('status', 'Data KHS berhasil diubah!');
    }
}
