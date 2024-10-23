<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KecamatanController extends Controller
{
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
}
