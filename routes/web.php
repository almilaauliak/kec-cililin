<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KecamatanController;

//Index Route
Route::get("/", [KecamatanController::class, 'index'])->name('index.index');
// Route::get('/berita', [KecamatanController::class, 'beritaIndex']);
// Route::get('/berita/detail', [KecamatanController::class, 'detailIndex']); //detaill berita

//Admin Route
Route::get('/admin', [KecamatanController::class, 'admin']);

//BERITA ROUTE
Route::get('index/berita', [KecamatanController::class, 'beritaIndex'])->name('index.berita');
Route::get('index/detail/{id}', [KecamatanController::class, 'detailIndex'])->name('index.detail');


//ADMIN ROUTE
Route::get('/admin', [KecamatanController::class, 'admin']);

//BERITA ROUTE ADMIN
Route::get('/berita/beritaAdmin', [KecamatanController::class, 'beritaAdmin'])->name('berita.beritaAdmin');
Route::get('/berita/dataBerita', [KecamatanController::class, 'dataBerita'])->name('berita.dataBerita');
Route::get('/berita/createBerita', [KecamatanController::class, 'createBerita'])->name('berita.createBerita');
Route::post('/berita/storeBerita', [KecamatanController::class, 'storeBerita'])->name('berita.storeBerita');
Route::get('/berita/editBerita/{id}', [KecamatanController::class, 'editBerita'])->name('berita.editBerita'); 
Route::post('/berita/updateBerita/{id}', [KecamatanController::class, 'updateBerita'])->name('berita.updateBerita');
Route::post('/berita/deleteBerita/{id}', [KecamatanController::class, 'deleteBerita']);

//ROUTE KELOLA HALAMAN ADMIN

Route::get('/halamanAdmin/halamanAdmin/{page}', [KecamatanController::class, 'halamanAdmin'])->name('halamanAdmin.halamanAdmin');
Route::get('/halamanAdmin/dataHalamanAdmin/{page}', [KecamatanController::class, 'dataHalamanAdmin'])->name('halamanAdmin.dataHalamanAdmin'); // Menggunakan metode yang sama
Route::get('/halamanAdmin/createHalamanAdmin', [KecamatanController::class, 'createHalamanAdmin'])->name('halamanAdmin.createHalamanAdmin');
Route::post('/halamanAdmin/storeHalamanAdmin', [KecamatanController::class, 'storeHalamanAdmin'])->name('halamanAdmin.storeHalamanAdmin');
Route::get('/halamanAdmin/editHalamanAdmin/{id}', [KecamatanController::class, 'editHalamanAdmin'])->name('halamanAdmin.editHalamanAdmin'); 
Route::post('/halamanAdmin/updateHalamanAdmin/{id}/{kategori}', [KecamatanController::class, 'updateHalamanAdmin'])->name('halamanAdmin.updateHalamanAdmin');
Route::post('/halamanAdmin/deleteHalamanAdmin/{id}', [KecamatanController::class, 'deleteHalamanAdmin']);

//Route tampilan halaman index

Route::get('/halaman/{kategori}', [KecamatanController::class, 'halamanIndex']);


Route::get('/homepage/homepage', [KecamatanController::class, 'homepage']); //Admin Beranda
Route::get('/homepage/dataHomepage', [KecamatanController::class, 'dataHomepage'])-> name('homepage.dataHomepage');
Route::get('/homepage/createHomepage', [KecamatanController::class, 'createHomepage'])->name('homepage.createHomepage');
Route::post('/homepage/storeHomepage', [KecamatanController::class, 'storeHomepage'])->name('homepage.storeHomepage');
Route::get('/homepage/editHomepage/{id}', [KecamatanController::class, 'editHomepage'])->name('homepage.editHomepage'); 
Route::post('/homepage/updateHomepage/{id}', [KecamatanController::class, 'updateHomepage'])->name('homepage.updateHomepage');
Route::post('/homepage/deleteHomepage/{id}', [KecamatanController::class, 'deleteHomepage'])->name('homepage.deleteHomepage');