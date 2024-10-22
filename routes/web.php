<?php

use App\Http\Controllers\KotaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropinsiController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AngsuranController;
use App\Http\Controllers\PinjamanController;

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/propinsi', PropinsiController::class);
Route::resource('/kota', KotaController::class);
Route::resource('/anggota', AnggotaController::class);
Route::resource('/pinjaman', PinjamanController::class);
Route::resource('/angsuran', AngsuranController::class);

Route::get(
    'segi-empat/input',
    [
        \App\Http\Controllers\SegiEmpatController::class,
        'inputSegiEmpat'
    ]
)->name('segi-empat.inputSegiEmpat');
Route::get(
    'segi-empat/hasil',
    [
        \App\Http\Controllers\SegiEmpatController::class,
        'hasil'
    ]
)->name('segi-empat.hasil');
Route::get(
    'segi-empat/input_blk',
    [
        \App\Http\Controllers\SegiEmpatController::class,
        'inputBalok'
    ]
)->name('segi-empat.inputSegiEmpat');
Route::get(
    'segi-empat/hasilBalok',
    [
        \App\Http\Controllers\SegiEmpatController::class,
        'hasilBalok'
    ]
)->name('segi-empat.hasilBalok');
Route::get(
    'segi-empat/input_limas',
    [
        \App\Http\Controllers\SegiEmpatController::class,
        'inputLimas'
    ]
)->name('segi-empat.hasilLimas');
Route::get(
    'segi-empat/hasil_limas',
    [
        \App\Http\Controllers\SegiEmpatController::class,
        'hasilLimas'
    ]
)->name('segi-empat.hasilLimas');
