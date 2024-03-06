<?php

use App\Http\Controllers\HomeController;
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

Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');


Route::resource('/karyawans', \App\Http\Controllers\KaryawanController::class);

Route::resource('/jabatans', \App\Http\Controllers\JabatanController::class);