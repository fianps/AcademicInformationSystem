<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KHS extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'semester',
        'sks_smt',
        'sks_total',
        'ips',
        'ipk',
        'file_khs',
    ];
}
