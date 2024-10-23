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


    public function sku()
    {
        return view('index.pelayanan.sku');
    }

    public function ium()
    {
        return view('index.pelayanan.ium');
    }

    //INFORMASI CONTROLLER

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


  //Berita Controller
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
