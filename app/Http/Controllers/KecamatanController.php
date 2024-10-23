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

    public function skuIndex()
    {
        return view('index.pelayanan.sku');
    }

    public function beritaIndex(){
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

    

}
