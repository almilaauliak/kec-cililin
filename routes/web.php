<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KecamatanController;


//Index Route
// Route::get('/index', [KecamatanController::class, 'index']);
Route::get("/", [KecamatanController::class, 'index'])->name('index.index');
Route::get('/pelayanan/ahliwaris', [KecamatanController::class, 'ahliwarisIndex']);
// <<<<<<< HEAD
// Route::get('/pelayanan/sku', [KecamatanController::class, 'skuIndex']);
// Route::get('/berita/berita', [KecamatanController::class, 'beritaIndex']);
// Route::get('/berita/detail', [KecamatanController::class, 'detailIndex']); //detaill berita

// //Admin Route
// Route::get('/admin', [KecamatanController::class, 'admin']);
// Route::get('/berita/beritaAdmin', [KecamatanController::class, 'beritaAdmin']);
// =======
Route::get('/pelayanan/sku', [KecamatanController::class, 'sku']);
Route::get('/pelayanan/ium', [KecamatanController::class, 'ium']);
Route::get('/informasi/sejarah', [KecamatanController::class, 'sejarah']);
Route::get('/informasi/struktur', [KecamatanController::class, 'struktur']);
Route::get('/informasi/maklumat', [KecamatanController::class, 'maklumat']);
Route::get('/informasi/jam_pelayanan', [KecamatanController::class, 'jam_pelayanan']);
