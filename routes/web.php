<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BerandaController::class, 'beranda'])->name('beranda');;
Route::get('/produk', [ProdukController::class, 'produk'])->name('produk');;
Route::get('/kontak', [KontakController::class, 'kontak'])->name('kontak');;
Route::get('/masuk', [MasukController::class, 'masuk'])->name('masuk');;
Route::post('/login', [MasukController::class, 'prosesLogin'])->name('proses.login');
