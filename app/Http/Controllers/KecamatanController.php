<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\File;
use Illuminate\Validation\ValidationException;

class KecamatanController extends Controller{

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

    //---------------------------------------------BERITA CONTROLLER---------------------------------------------

    public function beritaIndex()
    {
        return view('index.berita.berita', [
            'artikels' => Berita::all()
        ]);
    }

    public function detailIndex($id){
        $artikel = Berita::find($id);
        //return view('index.berita.detail', ['artikel'=> $artikel]);
        return view('index.berita.detail', compact('artikel'));
    }

       
    //---------------------------------------------END BERITA CONTROLLER---------------------------------------------

    //---------------------------------------------Admin Controller---------------------------------------------

    public function admin(){
        return view('admin.admin');
    }

    //---------------------------------------------END ADMIN CONTROLLER---------------------------------------------


    //---------------------------------------------BERITA ADMIN CONTROLLER---------------------------------------------
    public function dataBerita(){
        return view('admin.berita.beritaAdmin', [
            'artikels' => Berita::all()
        ]);
                        
    }
    
    public function beritaAdmin(){
        return view('admin.berita.beritaAdmin', [
            'artikels' => Berita::all()
        ]);
                        
    }
                       
   
    public function createBerita(){
        return view('admin.berita.createBerita');
    }

//     public function storeBerita(Request $request)
// {
//     // Aturan Validasi
//     $rules = [
//         'judul' => 'required',
//         'image' => 'required|max:1000|mimes:jpg,jpeg,png',
//         'desc'  => 'required|min:20',
//     ];

//     // Pesan Kesalahan
//     $messages = [
//         'judul.required' => 'Judul wajib diisi!',
//         'image.required' => 'Image wajib diisi!',
//         'desc.required' => 'Deskripsi wajib diisi!',
//     ];

//     // Validasi Input
//     $validatedData = $request->validate($rules, $messages);

//     // Upload Gambar
//     $fileName = time() . '.' . $request->image->extension();
//     $request->file('image')->storeAs('public/artikel', $fileName);

//     // Proses Konten Deskripsi dengan DOMDocument
//     $storage = "storage/content-artikel";
//     $dom = new \DOMDocument();
//     libxml_use_internal_errors(true);
//     $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
//     libxml_clear_errors();

//     $images = $dom->getElementsByTagName('img');
//     foreach ($images as $img) {
//         $src = $img->getAttribute('src');
//         if (preg_match('/data:image/', $src)) {
//             // Mendapatkan Tipe MIME
//             preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
//             $mimetype = $groups['mime'];

//             // Generate Nama File Unik
//             $fileNameContentRand = substr(md5(uniqid()), 6, 6) . '_' . time();
//             $filePath = "$storage/$fileNameContentRand.$mimetype";

//             // Menyimpan Gambar
//             Image::make($src)->resize(1200, 1200)
//                 ->encode($mimetype, 100)
//                 ->save(public_path($filePath));

//             // Update SRC Gambar dalam Deskripsi
//             $new_src = asset($filePath);
//             $img->setAttribute('src', $new_src);
//             $img->setAttribute('class', 'img-responsive');
//         }
//     }

//     // Simpan Data Berita ke Database
//     Berita::create([
//         'judul' => $validatedData['judul'],
//         'image' => $fileName,
//         'desc'  => $dom->saveHTML(),
//     ]);

//     // Redirect dengan Pesan Sukses
//     return redirect()->route('berita.createBerita')->with('success', 'Data berhasil disimpan!');

// }


//awal
public function storeBerita(Request $request)
{
    // Aturan Validasi
    $rules = [
        'judul' => 'required',
        'image' => 'required|max:1000|mimes:jpg,jpeg,png',
        'desc'  => 'required|min:20',
    ];

    // Pesan Kesalahan
    $messages = [
        'judul.required' => 'Judul wajib diisi!',
        'image.required' => 'Image wajib diisi!',
        'desc.required' => 'Deskripsi wajib diisi!',
    ];

    // Validasi Input
    $validatedData = $request->validate($rules, $messages);

    // Upload Gambar
    $fileName = time() . '.' . $request->image->extension();
    $request->file('image')->storeAs('public/artikel', $fileName);

    // Proses Konten Deskripsi dengan DOMDocument
    $storagePath = "../storage/content-artikel";
    $dom = new \DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    libxml_clear_errors();

    $images = $dom->getElementsByTagName('img');
    foreach ($images as $img) {
        $src = $img->getAttribute('src');
        if (preg_match('/data:image/', $src)) {
            // Mendapatkan Tipe MIME
            preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
            $mimetype = $groups['mime'];

            // Generate Nama File Unik
            $fileNameContentRand = substr(md5(uniqid()), 6, 6) . '_' . time();
            $filePath = public_path("$storagePath/$fileNameContentRand.$mimetype");

            // Menyimpan Gambar
            Image::make($src)->resize(1200, 1200)
                ->encode($mimetype, 100)
                ->save($filePath);

            // Update SRC Gambar dalam Deskripsi
            $new_src = asset("$storagePath/$fileNameContentRand.$mimetype");
            $img->setAttribute('src', $new_src);
            $img->setAttribute('class', 'img-responsive');
        }
    }

    // Simpan Data Berita ke Database
    Berita::create([
        'judul' => $validatedData['judul'],
        'image' => $fileName,
        'desc'  => $dom->saveHTML(),
    ]);

    // Redirect dengan Pesan Sukses
    return redirect()->route('berita.createBerita')->with('success', 'Data berhasil disimpan!');
}
//akhir

    public function editBerita($id){
        $artikel = Berita::find($id);
        return view('admin.berita.editBerita', compact('artikel'));
    }

    public function updateBerita(Request $request, $id)
    {
        $artikel = Berita::find($id);

        if ($request->hasFile('image')) {
            $fileCheck = 'required|max:1000|mimes:jpg,jpeg,png';
        } else {
            $fileCheck = 'max:1000|mimes:jpg,jpeg,png';
        }

        $rules = [
            'judul' =>'required',
            'image' => $fileCheck,
            'desc' =>'required|min:20',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Judul wajib diisi!',
            'desc.required' => 'Judul wajib diisi!',
        ];

        //$this->validate($request, $rules, $messages);

        $validator = \Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        // Image
       if ($request->hasFile('image')) {
            if (\File::exists('storage/artikel/'.$artikel->image)) {
                \File::delete('storage/artikel/'.$artikel->image);
            }
            $fileName = time().'.'.$request->image->extension();
            $request->file('image')->storeAs('public/artikel', $fileName);
       }

       if ($request->hasFile('image')) {
            $checkFileName = $fileName;
       } else {
         $checkFileName = $artikel->image;
       }

        // Artikel
        $storage = "storage/content-artikel";
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NOIMPLIED);
        libxml_clear_errors();

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContent = uniqid();
                $fileNameContentRand = substr(md5($fileNameContent),6,6).'_'.time();
                $filePath = ("$storage/$fileNameContentRand.$mimetype");
                $image = Image::make($src)->resize(1200,1200)->encode($mimetype, 100)->save(public_path($filePath));
                $new_src = asset($filePath);
                $img->removeAttribute('src');
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }

        $artikel->update([
            'judul' => $request->judul,
            'image' => $checkFileName,
            'desc' => $dom->saveHTML(),
        ]);

        return redirect('..berita/editBerita/'.$id)->with('success', 'data berhasil di update');

    }

    public function deleteBerita(){
        
    }
    //---------------------------------------------END BERITA ADMIN CONTROLLER---------------------------------------------


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


}
