<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KecamatanController;


//Index Route
// Route::get('/index', [KecamatanController::class, 'index']);
Route::get("/", [KecamatanController::class, 'index'])->name('index.index');
Route::get('/pelayanan/ahliwaris', [KecamatanController::class, 'ahliwarisIndex']);
Route::get('/pelayanan/sku', [KecamatanController::class, 'skuIndex']);
Route::get('/berita/berita', [KecamatanController::class, 'beritaIndex']);
Route::get('/berita/detail', [KecamatanController::class, 'detailIndex']); //detaill berita

//Admin Route
Route::get('/admin', [KecamatanController::class, 'admin']);
Route::get('/berita/beritaAdmin', [KecamatanController::class, 'beritaAdmin']);
