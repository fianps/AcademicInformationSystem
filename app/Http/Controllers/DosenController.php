<?php

namespace App\Http\Controllers;

use App\Models\IRS;
use App\Models\KHS;
use App\Models\Mahasiswa;
use App\Models\PKL;
use App\Models\Skripsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    //create view for dosen
    public function index(Request $request)
    {
        if ($request->has('search')) {
            $mahasiswa = Mahasiswa::where('nama', 'like', "%" . $request->search . "%")->get();
        }else{
            $mahasiswa = Mahasiswa::where('kode_wali', auth()->user()->kode_wali)->get();
        }
        return view('dosen.dosen',[
            'title' => 'Dosen',
            // get all the same kode_wali mahasiswa with user
            'mahasiswas' => $mahasiswa,
            // 'mahasiswas' => Mahasiswa::all(),
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
    public function dataPkl(Request $request)
    {
        if ($request->has('search')) {
            $mahasiswa = Mahasiswa::where('nama', 'like', "%" . $request->search . "%")->get();
        }else{
            $mahasiswa = Mahasiswa::where('kode_wali', auth()->user()->kode_wali)->get();
        }
        
        return view('dosen.data-pkl',[
            'title' => 'Data PKL',
            'mahasiswa' => $mahasiswa,
            'pkl' => PKL::all(),
        ]);
    }

    // make function to data-skripsi page
    public function dataSkripsi(Request $request)
    {
        if ($request->has('search')) {
            $mahasiswa = Mahasiswa::where('nama', 'like', "%" . $request->search . "%")->get();
        }else{
            $mahasiswa = Mahasiswa::where('kode_wali', auth()->user()->kode_wali)->get();
        }

        return view('dosen.data-skripsi',[
            'title' => 'Data Skripsi',
            'mahasiswa' => $mahasiswa,
            'skripsi' => Skripsi::all(),
        ]);
    }

    // make function to dep page
    public function dep(Request $request)
    {
        if ($request->has('search')) {
            $mahasiswa = Mahasiswa::where('nama', 'like', "%" . $request->search . "%")->get();
        }else{
            $mahasiswa = Mahasiswa::all();
        }

        return view('departemen.dep',[
            'title' => 'Data Mahasiswa',
            'mahasiswas' => $mahasiswa,
        ]);
    }

    // make function to detail page departemen
    public function depDetail($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $irs = IRS::where('email', $mahasiswa->email)->first();
        $khs = KHS::where('email', $mahasiswa->email)->first();
        $pkl = PKL::where('email', $mahasiswa->email)->first();
        $skripsi = Skripsi::where('email', $mahasiswa->email)->first(); 
        return view('departemen.detail', [
            'title' => 'Detail',
            'mahasiswa' => $mahasiswa,
            'irs' => $irs,
            'khs' => $khs,
            'pkl' => $pkl,
            'skripsi' => $skripsi,
        ]);
    }

    // make function to build dashboard departemen
    public function depDashboard()
    {
        // make chart for sum of mahasiswa by angkatan
        $data = DB::table('mahasiswas')
            ->select(DB::raw('angkatan, count(*) as total'))
            ->groupBy('angkatan')
            ->get();
        $data = json_decode($data, true);
        $data = array_column($data, 'total', 'angkatan');

        // make x and y axis for chart
        $x = array_keys($data);
        $y = array_values($data);

        // // make variable for line-chart with x-axis is angkatan and y-axis is jumlah mahasiswa
        // $angkatan = DB::table('mahasiswas')
        //     ->select(DB::raw('angkatan, count(*) as jumlah'))
        //     ->groupBy('angkatan')
        //     ->get();
        // $angkatan = json_decode($angkatan, true);
        // $angkatan = array_column($angkatan, 'angkatan');

        // $jumlah = DB::table('mahasiswas')
        //     ->select(DB::raw('angkatan, count(*) as jumlah'))
        //     ->groupBy('angkatan')
        //     ->get();
        // $jumlah = json_decode($jumlah, true);
        // $jumlah = array_column($jumlah, 'jumlah');

        // // join angkatan and jumlah
        // $angkatan_jumlah = array_combine($angkatan, $jumlah);

        // $total = Mahasiswa::select(DB::raw('count(*) as total'))
        // ->groupBy('status')->pluck('total');
        // $tahun = Mahasiswa::select(DB::raw('angkatan as tahun'))
        // ->groupBy('angkatan')->pluck('tahun');
        
        return view('departemen.dashboard',[
            'title' => 'Dashboard',
            'mahasiswas' => Mahasiswa::all(),
            'totalMhs' => Mahasiswa::count(),
            'totalLulus' => Skripsi::where('status', 'Lulus')->count(),
            'totalProses' => Skripsi::where('status', 'Proses')->count(),
            'totalPKL' => PKL::where('status', 'Proses')->count(),
            'grafik' => $data,
            'angkatan' => $x,
            'jumlah' => $y,
        ]);
    }
    public function dosenDashboard()
    {
        // make chart for sum of mahasiswa by angkatan
        $data = DB::table('mahasiswas')
            ->select(DB::raw('angkatan, count(*) as total'))
            ->groupBy('angkatan')
            ->get();
        $data = json_decode($data, true);
        $data = array_column($data, 'total', 'angkatan');

        // make x and y axis for chart
        $x = array_keys($data);
        $y = array_values($data);
        
        return view('dosen.dashboard',[
            'title' => 'Dashboard',
            'mahasiswas' => Mahasiswa::all(),
            'totalMhs' => Mahasiswa::count(),
            'totalLulus' => Skripsi::where('status', 'Lulus')->count(),
            'totalProses' => Skripsi::where('status', 'Proses')->count(),
            'totalPKL' => PKL::where('status', 'Proses')->count(),
            'grafik' => $data,
            'angkatan' => $x,
            'jumlah' => $y,
        ]);
    }
}
