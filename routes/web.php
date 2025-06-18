<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\MasukController;
use App\Http\Controllers\JanjijiwaController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\Admin\OrderController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

Route::get('/', [BerandaController::class, 'beranda'])->name('beranda');
Route::get('/produk', [ProdukController::class, 'produk'])->name('produk');
Route::get('/kontak', [KontakController::class, 'kontak'])->name('kontak');
Route::get('/produk/janjijiwa', [JanjijiwaController::class, 'janjijiwa'])->name('janjijiwa');

Route::get('/masuk', [MasukController::class, 'masuk'])->name('masuk');
Route::post('/proses-daftar', [MasukController::class, 'prosesDaftar'])->name('proses.daftar');
Route::post('/proses-login', [MasukController::class, 'prosesLogin'])->name('proses.login');

Route::post('/checkout', [CheckoutController::class, 'store'])->name('checkout');
Route::get('/admin/orders', [OrderController::class, 'index'])->name('admin.orders.index');

Route::post('/logout', function () {
    Auth::logout();
    return redirect()->route('masuk')->with('success', 'Berhasil logout');
})->name('logout');
