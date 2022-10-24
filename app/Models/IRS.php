<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IRS extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'semester',
        'sks',
        'file_irs',
    ];
}
