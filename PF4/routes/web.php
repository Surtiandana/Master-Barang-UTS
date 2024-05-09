<?php
use App\Http\Controllers\BarangController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Rute untuk halaman home
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Rute untuk resource barang
Route::resource('barang', BarangController::class);

// Rute untuk halaman welcome
Route::get('/', function () {
    return view('welcome');
});

