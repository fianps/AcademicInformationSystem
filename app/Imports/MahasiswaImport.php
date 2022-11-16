<?php

namespace App\Imports;

use App\Models\Mahasiswa;
use App\Models\User;
use App\Models\IRS;
use App\Models\KHS;
use App\Models\PKL;
use App\Models\Skripsi;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsFailures;

//import excel to mahasiswa and user table with email in irs, khs, pkl, skripsi table == email in mahasiswa table
class MahasiswaImport implements ToModel, WithHeadingRow, WithValidation, SkipsOnFailure
{
    use Importable, SkipsFailures;

    public function model(array $row)
    {
        new User([
            'name' => $row['nama'],
            'email' => $row['email'],
            'password' => Hash::make($row['nim']),
            'role' => 'mahasiswa',
            'kode_wali' => $row['kode_wali'],
        ]);

        new Mahasiswa([
            'nama' => $row['nama'],
            'nim' => $row['nim'],
            'email' => $row['email'],
            'no_hp' => $row['no_hp'],
            'alamat' => $row['alamat'],
            'angkatan' => $row['angkatan'],
            'status' => 'Belum Disetujui',
            'kode_wali' => $row['kode_wali'],
        ]);

        if(IRS::where('email', $row['email'])->doesntExist()){
            new IRS(['email' => $row['email']]);
        }elseif(KHS::where('email', $row['email'])->doesntExist()){
            new KHS(['email' => $row['email']]);
        }elseif(PKL::where('email', $row['email'])->doesntExist()){
            new PKL(['email' => $row['email']]);
        }elseif(Skripsi::where('email', $row['email'])->doesntExist()){
            new Skripsi(['email' => $row['email']]);
        }
    }

    public function rules(): array
    {
        return [
            'nama' => 'required',
            'nim' => 'required|min:5|max:20',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:20',
            'angkatan' => 'required',
            'kode_wali' => 'required',
        ];
    }
}
