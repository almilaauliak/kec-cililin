<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KecamatanController;

// Route::get('/index', [KecamatanController::class, 'index']);
Route::get("/", [KecamatanController::class, 'index'])->name('index.index');
Route::get('/pelayanan/ahliwaris', [KecamatanController::class, 'ahliwarisIndex']);
