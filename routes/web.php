<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KecamatanController;

// Route::get('/index', [KecamatanController::class, 'index']);
Route::get("/", [KecamatanController::class, 'index'])->name('index.index');
Route::get('/pelayanan/ahliwaris', [KecamatanController::class, 'ahliwarisIndex']);
Route::get(uri: '/pemerintahan/pmd', action: [KecamatanController::class, 'pmd']);
Route::get(uri: '/pemerintahan/binwas', action: [KecamatanController::class, 'binwas']);
Route::get(uri: '/pemerintahan/penyalik', action: [KecamatanController::class, 'penyalik']);
Route::get(uri: '/pemerintahan/trantibum', action: [KecamatanController::class, 'trantibum']);
Route::get(uri: '/pemerintahan/perencanaanKeu', action: [KecamatanController::class, 'perencanaanKeu']);
Route::get(uri: '/pemerintahan/kepegawaianUm', action: [KecamatanController::class, 'kepegawaianUm']);
Route::get(uri: '/kegiatan/dokumentasi', action: [KecamatanController::class, 'dokumentasi']);