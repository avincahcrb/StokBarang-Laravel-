<?php

use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StokbarangController;
use Illuminate\Support\Facades\Route;

Route::get(' ', function () {
    return view('login.login');
});

Route::middleware(['guest'])->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/', [LoginController::class, 'login']);
});

Route::get('/home', function () {
    return redirect('/masuk/riwayat');
});

Route::get('/stokbarang/masuk', function () {
    return view('stokbarang.masuk');
});

Route::get('/stokbarang/keluar', function () {
    return view('stokbarang.keluar');
});
Route::middleware(['auth'])->group(function () {
    Route::get('/logout', [LoginController::class, 'logout']);

    Route::post('riwayat-keluar', 'App\Http\Controllers\RiwayatController@storekeluar');

    Route::get('/get-autofill-data', 'App\Http\Controllers\StokbarangController@asd');

    Route::resource('stokbarang', StokbarangController::class);

    Route::resource('riwayat', RiwayatController::class);

    Route::get('/dashboard', [StokbarangController::class, 'dashboard'])->middleware('loginakses:admin');

    Route::get('masuk/riwayat', [RiwayatController::class, 'index'])->middleware('loginakses:admin');
});
