<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    //make function to show data
    public function index()
    {
        $mahasiswas = Mahasiswa::all();
        return view('data-mahasiswa', [
            'title' => 'Data Mahasiswa',
            'mahasiswas' => $mahasiswas
        ]);
    }

    //make function to show tambah data
    public function create()
    {
        return view('create.tambah-data-mhs', [
            'title' => 'Tambah Data Mahasiswa',
        ]);
    }

    // create new data in mahasiswa table
    public function store(Request $request)
    {
        // validate data
        $validatedData = $request->validate([
            'nama' => 'required',
            'nim' => 'required|min:5|max:20',
            'email' => 'required|email:dns|unique:users',
            'no_hp' => 'required',
            'alamat' => 'required',
            'angkatan' => 'required',
        ]);

        // insert data to table
        Mahasiswa::create($validatedData);

        // redirect to data-mahasiswa page
        return redirect('/data-mahasiswa')->with('success', 'Data Mahasiswa Berhasil Ditambahkan!');
    }

    // create function to show edit data
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('edit.edit-mahasiswa', [
            'title' => 'Edit Data Mahasiswa',
            'mahasiswa' => $mahasiswa
        ]);
    }
    // create function to update data
    public function update(Request $request, $id)
    {
        // make variable to get mahasiswa data
        $mahasiswa = Mahasiswa::find($id);

        // make variable to get request data
        $request->validate([
            'no_hp' => 'required',
            'alamat' => 'required',
            'angkatan' => 'required',
        ]);

        $mahasiswa->no_hp = $request->no_hp;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->angkatan = $request->angkatan;

        // save data to database
        $mahasiswa->save();

        // redirect to data-mahasiswa page
        return redirect('/data-mahasiswa')->with('success', 'Data Mahasiswa Berhasil Diubah!');
    }

    // user mahasiswa
    public function editMhs($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit.index', [
            'title' => 'Edit Profil',
            'mahasiswa' => $mahasiswa
        ]);
    }
    public function updateMhs(Request $request, $id)
    {
        // make variable to get mahasiswa data
        $mahasiswa = Mahasiswa::find($id);

        // make variable to get request data
        $request->validate([
            'no_hp' => 'required',
            'alamat' => 'required',
            'angkatan' => 'required',
        ]);

        $mahasiswa->no_hp = $request->no_hp;
        $mahasiswa->alamat = $request->alamat;
        $mahasiswa->angkatan = $request->angkatan;

        // save data to database
        $mahasiswa->save();

        // redirect to data-mahasiswa page
        return redirect('/mahasiswa')->with('success', 'Data Mahasiswa Berhasil Diubah!');
    }


    // make delate function
    public function destroy($id)
    {
        // make variable to get mahasiswa data
        $mahasiswa = Mahasiswa::find($id);

        // delete data
        $mahasiswa->delete();

        // redirect to data-mahasiswa page
        return redirect('/data-mahasiswa')->with('success', 'Data Mahasiswa Berhasil Dihapus!');
    }
}
