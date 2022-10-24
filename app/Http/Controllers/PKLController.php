<?php

namespace App\Http\Controllers;

use App\Models\PKL;
use Illuminate\Http\Request;

class PKLController extends Controller
{
    ////make function to show data
    public function index()
    {
        $pkl = PKL::where('email', auth()->user()->email)->first();
        return view('mahasiswa.pkl', [
            'title' => 'Data PKL',
            'pkl' => $pkl
        ]);
    }

    // make function to edit data
    public function edit($id)
    {
        $pkl = PKL::find($id);
        return view('mahasiswa.edit.pkl', [
            'title' => 'Edit PKL',
            'pkl' => $pkl
        ]);
    }
    // make function to update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required',
            'nilai' => 'nullable',
            'file_pkl' => 'nullable',
        ]);

        $input = $request->all();
        if($request->hasFile('file_pkl')){
            // get original file name
            $fileName = $request->file('file_pkl')->getClientOriginalName();
            // upload file
            $request->file('file_pkl')->storeAs('public/pkl', $fileName);
            $input['file_pkl'] = $fileName;
        }
        $pkl = PKL::find($id);
        $pkl->update($input);

        return redirect('/pkl')->with('status', 'Data PKL berhasil diubah!');
    }
}
