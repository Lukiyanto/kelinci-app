<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KandangController;
use App\Http\Controllers\PerkawinanKelinciController;
use App\Http\Controllers\JenisRasController;
use App\Http\Controllers\AnakKelinciController;
use App\Http\Controllers\IndukKelinciController;
use App\Http\Controllers\PenjualanController;
use App\Http\Controllers\DetailPenjualanController;
use App\Http\Controllers\PeternakanController;
use App\Http\Controllers\UserController;

Route::resource('kandang', KandangController::class);
Route::resource('perkawinan-kelinci', PerkawinanKelinciController::class);
Route::resource('jenis-ras', JenisRasController::class);
Route::resource('anak-kelinci', AnakKelinciController::class);
Route::resource('induk-kelinci', IndukKelinciController::class);
Route::resource('penjualan', PenjualanController::class);
Route::resource('detail-penjualan', DetailPenjualanController::class);
Route::resource('peternakan', PeternakanController::class);
Route::resource('user', UserController::class);

Route::get('/', function () {
    return view('welcome');
});