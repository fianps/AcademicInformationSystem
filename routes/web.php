<?php

use App\Models\User;
use App\Models\Operator;
use App\Models\Mahasiswa;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IRSController;
use App\Http\Controllers\KHSController;
use App\Http\Controllers\PKLController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
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
Route::post('/tambah-data-mhs', [MahasiswaController::class, 'store'])->middleware('auth','isAdmin');

// make route to edit data
Route::get('/edit-mahasiswa/{id}', [MahasiswaController::class, 'edit'])->middleware('auth');
Route::put('/edit-mahasiswa/{id}', [MahasiswaController::class, 'update'])->middleware('auth');

// make route to delete data mahasiswa
Route::delete('/data-mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->middleware('auth','isAdmin');

// mahasiswa
Route::get('/mahasiswa', function () {

    return view('mahasiswa.mahasiswa',[
        // 'user' => User::auth()->user()->id,
        'title' => 'PPL',
        'mahasiswa' => Mahasiswa::where('email', auth()->user()->email)->first(),
    ]);
})->middleware('auth','isMahasiswa');
// make route to edit-profil
Route::get('/edit-profil/{id}', [MahasiswaController::class, 'editMhs'])->middleware('auth','isMahasiswa');
Route::put('/edit-profil/{id}', [MahasiswaController::class, 'updateMhs'])->middleware('auth','isMahasiswa');

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