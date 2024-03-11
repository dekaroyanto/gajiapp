<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TotalgajiController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/dashboard',[HomeController::class, 'index'] );

Route::get('/', [LoginController::class, 'index'])->name('login');
Route::post('/loginproses', [LoginController::class, 'loginproses'])->name('loginproses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


// Route::group(['middleware' => ['auth']], function () {


Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');

Route::resource('/karyawans', \App\Http\Controllers\KaryawanController::class);


Route::resource('/jabatans', \App\Http\Controllers\JabatanController::class);

Route::resource('/gajis', TotalgajiController::class);
Route::get('/cetak-gaji', [TotalgajiController::class, 'cetakGaji'])->name('cetak-gaji');

// });
