<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\PengembalianController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckUserHak;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login/auth', [AuthController::class, 'auth'])->name('login.auth');

    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');

    Route::resource('barang', BarangController::class);
    Route::get('/barang/create', [BarangController::class, 'create'])->name('barang.create');

    Route::resource('peminjaman', PeminjamanController::class);
    Route::resource('pengembalian', PengembalianController::class);
    Route::resource('jenis-barang', JenisBarangController::class);

    Route::get('/barang-tersedia', [LaporanController::class, 'tersedia'])->name('laporan.barang-tersedia');
    Route::get('/status-barang', [LaporanController::class, 'status'])->name('laporan.status-barang');
    Route::get('/pengembalian-barang', [LaporanController::class, 'pengembalian'])->name('laporan.pengembalian-barang');

    Route::get('/dipinjam', [LaporanController::class, 'dipinjam'])->name('barang.dipinjam');

    Route::get('/daftar-pengguna', [LaporanController::class, 'pengguna'])->name('daftar-pengguna');
