<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KecamatanController;

//Index Route
Route::get("/", [KecamatanController::class, 'index'])->name('index.index');

Route::get('/pelayanan/ahliwaris', [KecamatanController::class, 'ahliwarisIndex']);

Route::get('/pemerintahan/pmd', [KecamatanController::class, 'pmd']);
Route::get('/pemerintahan/binwas', [KecamatanController::class, 'binwas']);
Route::get('/pemerintahan/penyalik', [KecamatanController::class, 'penyalik']);
Route::get('/pemerintahan/trantibum', [KecamatanController::class, 'trantibum']);
Route::get('/pemerintahan/perencanaanKeu', [KecamatanController::class, 'perencanaanKeu']);
Route::get('/pemerintahan/kepegawaianUm', [KecamatanController::class, 'kepegawaianUm']);
Route::get('/kegiatan/dokumentasi', [KecamatanController::class, 'dokumentasi']);

Route::get('/pelayanan/sku', [KecamatanController::class, 'sku']);
Route::get('/berita/berita', [KecamatanController::class, 'beritaIndex']);
Route::get('/berita/detail', [KecamatanController::class, 'detailIndex']); //detaill berita

//Admin Route
Route::get('/admin', [KecamatanController::class, 'admin']);

Route::get('/pelayanan/ium', [KecamatanController::class, 'ium']);
Route::get('/pelayanan/sku', [KecamatanController::class, 'skuIndex']);

//INFORMASI ROUTE
Route::get('/informasi/sejarah', [KecamatanController::class, 'sejarah']);
Route::get('/informasi/struktur', [KecamatanController::class, 'struktur']);
Route::get('/informasi/maklumat', [KecamatanController::class, 'maklumat']);
Route::get('/informasi/jam_pelayanan', [KecamatanController::class, 'jam_pelayanan']);

//BERITA ROUTE
Route::get('/berita/berita', [KecamatanController::class, 'beritaIndex']);
Route::get('/berita/detail/{id}', [KecamatanController::class, 'detailIndex']);


//ADMIN ROUTE
Route::get('/admin', [KecamatanController::class, 'admin']);

//BERITA ROUTE ADMIN
Route::get('/berita/beritaAdmin', [KecamatanController::class, 'beritaAdmin']);
Route::get('/berita/dataBerita', [KecamatanController::class, 'dataBerita']);
Route::get('/berita/createBerita', [KecamatanController::class, 'createBerita'])->name('berita.createBerita');
Route::post('/berita/storeBerita', [KecamatanController::class, 'storeBerita'])->name('berita.storeBerita');
Route::get('/berita/editBerita/{id}', [KecamatanController::class, 'editBerita'])->name('berita.editBerita'); 
Route::post('/berita/updateBerita/{id}', [KecamatanController::class, 'updateBerita'])->name('berita.updateBerita'); ;
Route::post('/berita/deleteBerita/{id}', [KecamatanController::class, 'deleteBerita']);
