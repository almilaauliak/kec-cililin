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

    public function sku()
    {
        return view('index.pelayanan.sku');
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
