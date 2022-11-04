<?php

namespace App\Http\Controllers;

use App\Models\IRS;
use App\Models\KHS;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\PKL;
use App\Models\Skripsi;

class MahasiswaController extends Controller
{
    //make function to show data
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $mahasiswas = Mahasiswa::where('nama', 'like', "%" . $request->search . "%")->get();
        } else {
            $mahasiswas = Mahasiswa::all();
        }
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
            'status' => 'required',
        ]);

        // insert data to table
        Mahasiswa::create($validatedData);
        // // insert validatedData[email] to table irs if email in irs != email in mahasiswa
        // if(IRS::where('email', $validatedData['email'])->doesntExist()){
        //     IRS::create(['email' => $validatedData['email']]);
        // }elseif(KHS::where('email', $validatedData['email'])->doesntExist()){
        //     KHS::create(['email' => $validatedData['email']]);
        // }elseif(PKL::where('email', $validatedData['email'])->doesntExist()){
        //     PKL::create(['email' => $validatedData['email']]);
        // }elseif(Skripsi::where('email', $validatedData['email'])->doesntExist()){
        //     Skripsi::create(['email' => $validatedData['email']]);
        // }

        // $irs = IRS::find($email);
        // if ($validatedData['email'] )

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

    // make function to import data mahasiswa to database
    // public function import(Request $request)
    // {
    //     // make variable to get file
    //     $file = $request->file('file');

    //     // make variable to get file name
    //     $nama_file = rand() . $file->getClientOriginalName();

    //     // make variable to get file extension
    //     $file->move('file_mahasiswa', $nama_file);

    //     // import data
    //     Excel::import(new MahasiswaImport, public_path('/file_mahasiswa/' . $nama_file));

    //     // redirect to data-mahasiswa page
    //     return redirect('/data-mahasiswa')->with('success', 'Data Mahasiswa Berhasil Diimport!');
    // }
}
