<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NotaController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\Pelanggan1Controller;

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function () {
        return view('dashboard');
    });
});
Route::resource('pelanggan', Pelanggan1Controller::class);
Route::resource('barang', BarangController::class);
Route::get('/transaksi', [TransaksiController::class, 'index'])->name('index.transaksi');
Route::post('/createTransaksi', [TransaksiController::class, 'createTransaksi']);
Route::get('/login', [AuthController::class, 'pageLogin'])->name('login');
Route::post('/login', [AuthController::class, 'loginAction']);
Route::get('/logout', [AuthController::class, 'logout']);
Route::get('/nota', [NotaController::class, 'index']);
Route::get('/get-barang-detail/{id}', [TransaksiController::class, 'getBarangDetail']);
