<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegencyController;
use App\Http\Controllers\DistrictsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/luas', [RegencyController::class, 'luas']);
Route::get('/populasi', [RegencyController::class, 'populasi']);
Route::get('/kepadatan', [RegencyController::class, 'kepadatan']);
Route::get('/ipm', [RegencyController::class, 'ipm']);
Route::get('/pariwisata', [RegencyController::class, 'pariwisata']);
Route::get('/pdrb', [RegencyController::class, 'pdrb']);
Route::get('/pengangguran', [RegencyController::class, 'pengangguran']);
Route::get('/kemiskinan', [RegencyController::class, 'kemiskinan']);
Route::get('/kabkota', [RegencyController::class, 'kabkota']);
Route::get('/home', [RegencyController::class, 'home']);
Route::get('/kecamatan', [DistrictsController::class, 'kecamatan']);
// Route::get('/anggota', [Controller::class, 'anggota']);