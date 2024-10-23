<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KecamatanController extends Controller

{

    //Index Controller

    public function index()
    {
        return view('index.index');
    }

    public function ahliwarisIndex()
    {
        return view('index.pelayanan.ahliwaris');
    }

    public function pmd()
    {
        return view('index.pemerintahan.pmd');
    }

    public function binwas()
    {
        return view('index.pemerintahan.binwas');
    }

    public function penyalik()
    {
        return view('index.pemerintahan.penyalik');
    }

    public function trantibum()
    {
        return view('index.pemerintahan.trantibum');
    }

    public function perencanaanKeu()
    {
        return view('index.pemerintahan.perencanaanKeu');
    }

    public function kepegawaianUm()
    {
        return view('index.pemerintahan.kepegawaianUm');
    }

    public function dokumentasi()
    {
        return view('index.kegiatan.dokumentasi');
    }

    public function sku()
    {
        return view('index.pelayanan.sku');
    }


    public function beritaIndex()
    {
        return view('index.berita.berita');
    }

    public function detailIndex(){
        return view('index.berita.detail');
    }

    //Admin Controller

    public function admin(){
        return view('admin.admin');
    }

    public function beritaAdmin(){
        return view('admin.berita.beritaAdmin');
    }

    


    public function ium()
    {
        return view('index.pelayanan.ium');
    }

    public function sejarah()
    {
        return view('index.informasi.sejarah');
    }

    public function struktur()
    {
        return view('index.informasi.struktur');
    }

    public function maklumat()
    {
        return view('index.informasi.maklumat');
    }

    public function jam_pelayanan()
    {
        return view('index.informasi.jam_pelayanan');
    }
}
