<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skripsi extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'status',
        'nilai',
        'lama_studi',
        'tgl_sidang',
        'file_skripsi',
    ];
}
