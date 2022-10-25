<?php

namespace App\Http\Controllers;

use App\Models\Skripsi;
use Illuminate\Http\Request;

class SkripsiController extends Controller
{
    //make function to show data
    public function index()
    {
        $skripsi = Skripsi::where('email', auth()->user()->email)->first();
        return view('mahasiswa.skripsi', [
            'title' => 'Data Skripsi',
            'skripsi' => $skripsi
        ]);
    }

    // make function to edit data
    public function edit($id)
    {
        $skripsi = Skripsi::find($id);
        return view('mahasiswa.edit.skripsi', [
            'title' => 'Edit Skripsi',
            'skripsi' => $skripsi
        ]);
    }
    // make function to update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
            'nilai' => 'nullable',
            'lama_studi' => 'nullable',
            'tgl_sidang' => 'nullable',
            'file_skripsi' => 'nullable',
        ]);

        $input = $request->all();
        if($request->hasFile('file_skripsi')){
            // get original file name
            $fileName = $request->file('file_skripsi')->getClientOriginalName();
            // upload file
            $request->file('file_skripsi')->storeAs('public/skripsi', $fileName);
            $input['file_skripsi'] = $fileName;
        }
        $skripsi = Skripsi::find($id);
        $skripsi->update($input);

        return redirect('/skripsi')->with('status', 'Data Skripsi berhasil diubah!');
    }
}
