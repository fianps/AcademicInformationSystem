<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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
        'users' => DB::table('users')->get(),
        'title' => 'PPL',
        'operators' => DB::table('operators')->get(),
    ]);
})->middleware('auth');

// make route to LoginController
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);

// make post route to register
Route::post('/register', [RegisterController::class, 'store']); 

// make route to ProfilController
Route::get('/edit-profil', [ProfilController::class, 'index'])->middleware('auth');

Route::get('/dashboard', [DashboardController::class, 'index']);
