<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IRS;

class IRSController extends Controller
{
    //make function to show data
    public function index()
    {
        $irs = IRS::where('email', auth()->user()->email)->first();
        return view('mahasiswa.irs', [
            'title' => 'Data IRS',
            'irs' => $irs
        ]);
    }

    // make function to edit data
    public function edit($id)
    {
        $irs = IRS::find($id);
        return view('mahasiswa.edit.irs', [
            'title' => 'Edit IRS',
            'irs' => $irs
        ]);
    }
    // make function to update data
    public function update(Request $request, $id)
    {
        $request->validate([
            'semester' => 'required',
            'sks' => 'required',
            'file_irs' => 'required',
        ]);

        $input = $request->all();
        if($request->hasFile('file_irs')){
            // get original file name
            $fileName = $request->file('file_irs')->getClientOriginalName();
            // upload file
            $request->file('file_irs')->storeAs('public/irs', $fileName);
            $input['file_irs'] = $fileName;
        }
        $irs = IRS::find($id);
        $irs->update($input);

        return redirect('/irs')->with('status', 'Data IRS berhasil diubah!');
    }
}
