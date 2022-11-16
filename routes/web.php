<?php

use App\Models\User;
use App\Models\Operator;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IRSController;
use App\Http\Controllers\KHSController;
use App\Http\Controllers\PKLController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\SkripsiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MahasiswaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    return view('operator',[
        // 'user' => User::auth()->user()->id,
        'title' => 'PPL',
        'operator' => Operator::where('id', auth()->user()->id)->first(),
    ]);
})->middleware('auth','isAdmin');

// make route to LoginController
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);

// make post route to register
Route::post('/register', [RegisterController::class, 'store']); 

// make route to ProfilController
// Route::get('/edit-profil', [ProfilController::class, 'index'])->middleware('auth');
Route::get('/edit-profil/{id}', [ProfilController::class, 'index'])->middleware('auth','isAdmin');
Route::put('/edit-profil/{id}', [ProfilController::class, 'update'])->middleware('auth','isAdmin');
// make route to MahasiswaController
Route::get('/data-mahasiswa', [MahasiswaController::class, 'index'])->middleware('auth','isAdmin');
Route::get('/tambah-data-mhs', [MahasiswaController::class, 'create'])->middleware('auth','isAdmin');
// make route to create new data
Route::put('/tambah-data-mhs', [MahasiswaController::class, 'store'])->middleware('auth','isAdmin');
// make route to import data
Route::post('/import-data-mhs', [MahasiswaController::class, 'import'])->middleware('auth','isAdmin');
// make route to edit data
Route::get('/edit-mahasiswa/{id}', [MahasiswaController::class, 'edit'])->middleware('auth');
Route::put('/edit-mahasiswa/{id}', [MahasiswaController::class, 'update'])->middleware('auth');
// make route to delete data mahasiswa
Route::delete('/data-mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->middleware('auth','isAdmin');


// make route to import data
Route::post('/import-mahasiswa', [MahasiswaController::class, 'import'])->middleware('auth','isAdmin');



// mahasiswa
Route::get('/mahasiswa', function () {

    return view('mahasiswa.mahasiswa',[
        // 'user' => User::auth()->user()->id,
        'title' => 'PPL',
        'mahasiswa' => Mahasiswa::where('email', auth()->user()->email)->first(),
    ]);
})->middleware('auth','isMahasiswa');
// make route to edit-profil
Route::get('/edit-profilmhs/{id}', [MahasiswaController::class, 'editMhs'])->middleware('auth','isMahasiswa');
Route::put('/edit-profilmhs/{id}', [MahasiswaController::class, 'updateMhs'])->middleware('auth','isMahasiswa');

// make route to irs
Route::get('/irs', [IRSController::class, 'index'])->middleware('auth','isMahasiswa');
Route::get('/edit-irs/{id}', [IRSController::class, 'edit'])->middleware('auth','isMahasiswa');
Route::put('/edit-irs/{id}', [IRSController::class, 'update'])->middleware('auth','isMahasiswa');

// make route to khs
Route::get('/khs', [KHSController::class, 'index'])->middleware('auth','isMahasiswa');
Route::get('/edit-khs/{id}', [KHSController::class, 'edit'])->middleware('auth','isMahasiswa');
Route::put('/edit-khs/{id}', [KHSController::class, 'update'])->middleware('auth','isMahasiswa');

// make route to pkl
Route::get('/pkl', [PKLController::class, 'index'])->middleware('auth','isMahasiswa');
Route::get('/edit-pkl/{id}', [PKLController::class, 'edit'])->middleware('auth','isMahasiswa');
Route::put('/edit-pkl/{id}', [PKLController::class, 'update'])->middleware('auth','isMahasiswa');

// make route to skripsi
Route::get('/skripsi', [SkripsiController::class, 'index'])->middleware('auth','isMahasiswa');
Route::get('/edit-skripsi/{id}', [SkripsiController::class, 'edit'])->middleware('auth','isMahasiswa');
Route::put('/edit-skripsi/{id}', [SkripsiController::class, 'update'])->middleware('auth','isMahasiswa');

// dosen
Route::get('/dosen-dashboard', [DosenController::class, 'dosenDashboard'])->middleware('auth', 'isDosen');
Route::get('/dosen', [DosenController::class, 'index'])->middleware('auth', 'isDosen');
Route::get('/dosen/{id}', [DosenController::class, 'show'])->middleware('auth', 'isDosen');
// make route to changeStatus
Route::put('/dosen/{id}', [DosenController::class, 'changeStatus'])->middleware('auth', 'isDosen');
Route::get('/data-pkl', [DosenController::class, 'dataPkl'])->middleware('auth', 'isDosen');
Route::get('/data-skripsi', [DosenController::class, 'dataSkripsi'])->middleware('auth', 'isDosen');

// departemen
Route::get('/departemen', [DosenController::class, 'dep'])->middleware('auth', 'isDep');
Route::get('/departemen/{id}', [DosenController::class, 'depDetail'])->middleware('auth', 'isDep');
// make route to dashboard
Route::get('/departemen-dashboard', [DosenController::class, 'depDashboard'])->middleware('auth', 'isDep');