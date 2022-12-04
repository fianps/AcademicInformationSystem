<?php

namespace App\Http\Controllers;

use App\Models\IRS;
use App\Models\KHS;
use App\Models\Mahasiswa;
use App\Models\PKL;
use App\Models\Skripsi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

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
        $tes2 = DB::table('mahasiswas')
            ->select(
                DB::raw('angkatan'),
                DB::raw('COUNT(*) as jumlah'),
                DB::raw('SUM(status="Belum Disetujui") as tolak')
            )
            ->groupBy(DB::raw('angkatan'))
            ->get();
        $result2[] = ['Year','Approved','Rejected'];
        foreach ($tes2 as $key => $value) {
            $result2[++$key] = [$value->angkatan,(int)$value->jumlah,(int)$value->tolak];
        }
        
        return view('departemen.dashboard',[
            'title' => 'Dashboard',
            'mahasiswas' => Mahasiswa::all(),
            'totalMhs' => Mahasiswa::count(),
            'totalLulus' => Skripsi::where('status', 'Lulus')->count(),
            'totalProses' => Skripsi::where('status', 'Proses')->count(),
            'totalPKL' => PKL::where('status', 'Proses')->count(),
        ])->with('result2',$result2);
    }

    public function dosenDashboard()
    {
        $tes = Mahasiswa::where('kode_wali', auth()->user()->kode_wali)
            ->select(
                DB::raw('angkatan'),
                DB::raw('COUNT(*) as jumlah'),
                DB::raw('SUM(status="Belum Disetujui") as tolak')
            )
            ->groupBy(DB::raw('angkatan'))
            ->get();
        $result[] = ['Year','Approved','Rejected'];
        foreach ($tes as $key => $value) {
            $result[++$key] = [$value->angkatan,(int)$value->jumlah,(int)$value->tolak];
        }

        // $stat = DB::select(DB::raw('SELECT SUM(p_k_l_s.status="Belum") as PKL, SUM(skripsis.status="Belum Ambil") as Skripsi, SUM(skripsis.status="Lulus") as Lulus, SUM(p_k_l_s.status="Proses") as "Sedang PKL", SUM(p_k_l_s.status="Lulus") as "Telah PKL" FROM p_k_l_s INNER JOIN mahasiswas ON p_k_l_s.email=mahasiswas.email INNER JOIN skripsis ON skripsis.email=mahasiswas.email'));
        // $result2[] = ['Status','Total'];
        // $stat_key[] = ['Belum PKL','Belum Skripsi','Lulus','Sedang PKL','Telah PKL'];
        // foreach ($stat as $key => $value) {
        //     $result2[++$key]
        // }

        return view('dosen.dashboard',[
            'title' => 'Dashboard',
            'mahasiswas' => Mahasiswa::all(),
            'totalMhs' => Mahasiswa::count(),
            'totalLulus' => Skripsi::where('status', 'Lulus')->count(),
            'totalProses' => Skripsi::where('status', 'Proses')->count(),
            'totalPKL' => PKL::where('status', 'Proses')->count(),
        ])->with('result',$result);
    }
}
