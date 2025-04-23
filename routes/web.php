<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RebookController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;



// Halaman pertama kali
Route::get('/', [HomeController::class, 'index'])->name('home');
// form input buat booking ruangan
Route::post('booking', [HomeController::class, 'booking'])->name('booking');
// halaman buat login
Route::get('/login', [LoginController::class, 'index'])->name('login');
// proses login
Route::post('cekLogin', [LoginController::class, 'authenticate'])->name('cekLogin');
// Hak akses dapat digunakan jika sudah login
Route::group(['middleware' => 'auth'], function() {
    // proses logout
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    // halaman dashboard
    Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');
    // crud ruangan
    Route::resource('listRuangan', RoomController::class);
    // crud pengguna admin
    Route::resource('listPenggunaAdministrasi', UsersController::class);
    // list booking
    Route::resource('RebookRuangan', RebookController::class);
    // ambil data rebook
     Route::get('RebookRuangan.search', [RebookController::class, 'search'])->name('RebookRuangan.search');

});
