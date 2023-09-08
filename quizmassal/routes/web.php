<?php

use App\Http\Controllers\RedirectController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SoalController;
use Illuminate\Support\Facades\Route;

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
    return view('login');
});
Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::get('/redirect', [RedirectController::class, 'index'])->name('redirect');
Route::get('/cekuser', [RedirectController::class, 'cekuser'])->name('cekuser');
Route::post('/register-proses', [RegisterController::class, 'create'])->name('register-proses');
Route::group(['middleware' => ['cek_token']], function () {
    Route::get('/soal', [SoalController::class, 'index'])->name('soal');
});
