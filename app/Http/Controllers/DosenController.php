<?php

namespace App\Http\Controllers;

use App\Models\IRS;
use App\Models\KHS;
use App\Models\Mahasiswa;
use App\Models\PKL;
use App\Models\Skripsi;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    //create view for dosen
    public function index()
    {
        return view('dosen.dosen',[
            'title' => 'Dosen',
            'mahasiswas' => Mahasiswa::all(),
        ]);
    }

    //make show detail data
    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $irs = IRS::where('email', $mahasiswa->email)->first();
        $khs = KHS::where('email', $mahasiswa->email)->first();
        $pkl = PKL::where('email', $mahasiswa->email)->first();
        $skripsi = Skripsi::where('email', $mahasiswa->email)->first(); 
        return view('dosen.detail', [
            'title' => 'Detail',
            'mahasiswa' => $mahasiswa,
            'irs' => $irs,
            'khs' => $khs,
            'pkl' => $pkl,
            'skripsi' => $skripsi,
        ]);
    }

    // make function to change approval status
    public function changeStatus($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        if($mahasiswa->status == 'Belum Disetujui'){
            $mahasiswa->status = 'Disetujui';
        }else{
            $mahasiswa->status = 'Belum Disetujui';
        }
        $mahasiswa->save();
        return redirect('/dosen')->with('success', 'Status Mahasiswa Berhasil Diubah!');
    }
    
    // make function to data-pkl page
    public function dataPkl()
    {
        return view('dosen.data-pkl',[
            'title' => 'Data PKL',
            'mahasiswa' => Mahasiswa::all(),
            'pkl' => PKL::all(),
        ]);
    }

    // make function to data-skripsi page
    public function dataSkripsi()
    {
        return view('dosen.data-skripsi',[
            'title' => 'Data Skripsi',
            'mahasiswa' => Mahasiswa::all(),
            'skripsi' => Skripsi::all(),
        ]);
    }

    // make function to dep page
    public function dep()
    {
        return view('departemen.dep',[
            'title' => 'Data Mahasiswa',
            'mahasiswas' => Mahasiswa::all(),
        ]);
    }
}
