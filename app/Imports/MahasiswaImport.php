<?php

namespace App\Imports;

use Excel;
use App\Models\Mahasiswa;
use App\Models\User;
use App\Models\IRS;
use App\Models\KHS;
use App\Models\PKL;
use App\Models\Skripsi;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\SkipsOnFailure;
use Maatwebsite\Excel\Concerns\WithValidation;
use Maatwebsite\Excel\Concerns\SkipsFailures;

//import excel to mahasiswa and user table with email in irs, khs, pkl, skripsi table == email in mahasiswa table
class MahasiswaImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            Mahasiswa::create([
                'nama' => $row['nama'],
                'nim' => $row['nim'],
                'email' => $row['email'],
                'angkatan' => $row['angkatan'],
                'status' => 'Belum Disetujui',
                'kode_wali' => $row['kode_wali'],
            ]);

            IRS::create([
                'email' => $row['email']
            ]);
            KHS::create([
                'email' => $row['email']
            ]);
            PKL::create([
                'email' => $row['email']
            ]);
            Skripsi::create([
                'email' => $row['email']
            ]);
        }
    }
}
