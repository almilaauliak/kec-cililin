<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KecamatanController;

// Route::get('/index', [KecamatanController::class, 'index']);
Route::get("/", [KecamatanController::class, 'index'])->name('index.index');
Route::get('/pelayanan/ahliwaris', [KecamatanController::class, 'ahliwarisIndex']);
Route::get('/pelayanan/sku', [KecamatanController::class, 'sku']);
Route::get('/pelayanan/ium', [KecamatanController::class, 'ium']);
Route::get('/informasi/sejarah', [KecamatanController::class, 'sejarah']);
Route::get('/informasi/struktur', [KecamatanController::class, 'struktur']);
Route::get('/informasi/maklumat', [KecamatanController::class, 'maklumat']);
Route::get('/informasi/jam_pelayanan', [KecamatanController::class, 'jam_pelayanan']);

