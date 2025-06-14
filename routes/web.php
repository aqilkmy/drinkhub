<?php

use App\Http\Controllers\BerandaController;
use App\Http\Controllers\MasukController;
use Illuminate\Support\Facades\Route;


Route::get('/', [BerandaController::class, 'beranda'])->name('beranda');;
Route::get('/masuk', [MasukController::class, 'masuk'])->name('masuk');;
