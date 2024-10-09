<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KecamatanController;

Route::get('/index', [KecamatanController::class, 'index']);
