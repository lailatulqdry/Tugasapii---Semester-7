<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\MataPelajaranController;
use App\Http\Controllers\RecapKehadiranController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/siswa', [SiswaController::class, 'store']);
Route::get('/siswa', [SiswaController::class, 'index']);
Route::post('/kelas', [KelasController::class, 'store']);
Route::get('/kelas', [KelasController::class, 'index']);
Route::post('/guru', [GuruController::class, 'store']);
Route::get('/guru', [GuruController::class, 'index']);
Route::post('/jadwal', [JadwalController::class, 'store']);
Route::get('/jadwal', [JadwalController::class, 'index']);
Route::post('/absensi', [AbsensiController::class, 'store']);
Route::get('/absensi', [AbsensiController::class, 'index']);
Route::post('/recapkehadiran', [RecapKehadiranController::class, 'store']);
Route::get('/recapkehadiran', [RecapKehadiranController::class, 'index']);
Route::post('/matapelajaran', [MataPelajaranController::class, 'store']);
Route::get('/matapelajaran', [MataPelajaranController::class, 'index']);
// Route::post('/lokasi', [LokasiController::class, 'store']);
// Route::get('/lokasi', [LokasiController::class, 'index']);