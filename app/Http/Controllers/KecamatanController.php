<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Validator;
use App\Models\Berita;
use App\Models\Halaman; 
use App\Models\Homepage;


class KecamatanController extends Controller{

    //Index Controller

    public function index()
    {
     // Mengambil semua data dari tabel homepages
     $homepages = Homepage::all(); // Mengambil semua data
        
     return view('index.index', compact('homepages')); // Mengirim data ke tampilan
    }   
    //---------------------------------------------BERITA CONTROLLER---------------------------------------------

    public function beritaIndex(){
        return view('index.berita', [
            'artikels' => Berita::all()
        ]);
    }

    public function detailIndex($id){
        $artikel = Berita::find($id);
        //return view('index.berita.detail', ['artikel'=> $artikel]);
        return view('index.detail', compact('artikel'));
    }

       
    //---------------------------------------------END BERITA CONTROLLER---------------------------------------------

    //---------------------------------------------Admin Controller---------------------------------------------

    public function admin(){
        return view('admin.admin');
    }

    //---------------------------------------------END ADMIN CONTROLLER---------------------------------------------


    //---------------------------------------------BERITA ADMIN CONTROLLER---------------------------------------------
    public function dataBerita(){
        return view('berita.beritaAdmin', [
            'artikels' => Berita::all()
        ]);
                        
    }
    
    public function beritaAdmin(){
        return view('berita.beritaAdmin', [
            'artikels' => Berita::all()
        ]);
                        
    }
                       
   
    public function createBerita(){
        return view('berita.createBerita');
    }

public function storeBerita(Request $request)
{
    $rules = [
        'judul' => 'required',
        'image' => 'required|max:1000|mimes:jpg,jpeg,png',
        'desc'  => 'required|min:20',
    ];

    $messages = [
        'judul.required' => 'Judul wajib diisi!',
        'image.required' => 'Image wajib diisi!',
        'desc.required' => 'Deskripsi wajib diisi!',
    ];

    $validatedData = $request->validate($rules, $messages);

    // Upload Image
    $fileName = time() . '.' . $request->image->extension();
    //$filePath = $request->file('image')->storeAs('public/artikel', $fileName);
    $filePath = $request->file('image')->storeAs('artikel', $fileName, 'public');

    // Processing Description Content
    $storagePath = 'public/artikel';
    $dom = new \DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    libxml_clear_errors();

    $images = $dom->getElementsByTagName('img');
    foreach ($images as $img) {
        $src = $img->getAttribute('src');
        if (preg_match('/data:image/', $src)) {
            preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
            $mimetype = $groups['mime'];
            $fileNameContentRand = substr(md5(uniqid()), 6, 6) . '_' . time();
            $fileContentPath = "$storagePath/$fileNameContentRand.$mimetype";

            Image::make($src)->resize(1200, 1200)
                ->encode($mimetype, 100)
                ->save(storage_path("app/$fileContentPath"));

            $new_src = asset("storage/$fileContentPath");
            $img->setAttribute('src', $new_src);
            $img->setAttribute('class', 'img-responsive');
        }
    }

    Berita::create([
        'judul' => $validatedData['judul'],
        'image' => $filePath,
        'desc'  => $dom->saveHTML(),
    ]);

    return redirect()->route('berita.createBerita')->with('success', 'Data berhasil disimpan!');
}


//akhir nyoba

    public function editBerita($id){
        $artikel = Berita::find($id);
        return view('berita.editBerita', compact('artikel'));
        
        
    }

    public function updateBerita(Request $request, $id)
    {
        $artikel = Berita::find($id);
    
        if (!$artikel) {
            return redirect()->back()->withErrors(['error' => 'Artikel tidak ditemukan.']);
        }
    
        // Aturan validasi
        $rules = [
            'judul' => 'required',
            'image' => 'nullable|max:1000|mimes:jpg,jpeg,png', // Ganti 'required' dengan 'nullable'
            'desc' => 'required|min:20',
        ];
    
        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'image.required' => 'Image wajib diisi!',
            'desc.required' => 'Deskripsi wajib diisi!',
        ];
    
        // Validasi
        $validatedData = $request->validate($rules, $messages);
    
        // Upload Image
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if (\File::exists('storage/artikel/' . $artikel->image)) {
                \File::delete('storage/artikel/' . $artikel->image);
            }
    
            // Simpan gambar baru
            $fileName = time() . '.' . $request->image->extension();
            $filePath = $request->file('image')->storeAs('artikel', $fileName, 'public');
        } else {
            // Jika tidak ada gambar baru, gunakan gambar lama
            $filePath = $artikel->image;
        }
    
        // Proses konten deskripsi
        $storagePath = 'public/artikel';
        $dom = new \DOMDocument();
        libxml_use_internal_errors(true);
        $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
        libxml_clear_errors();
    
        $images = $dom->getElementsByTagName('img');
        foreach ($images as $img) {
            $src = $img->getAttribute('src');
            if (preg_match('/data:image/', $src)) {
                preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
                $mimetype = $groups['mime'];
                $fileNameContentRand = substr(md5(uniqid()), 6, 6) . '_' . time();
                $fileContentPath = "$storagePath/$fileNameContentRand.$mimetype";
    
                Image::make($src)->resize(1200, 1200)
                    ->encode($mimetype, 100)
                    ->save(storage_path("app/$fileContentPath"));
    
                $new_src = asset("storage/$fileContentPath");
                $img->setAttribute('src', $new_src);
                $img->setAttribute('class', 'img-responsive');
            }
        }
    
        // Update artikel
        $artikel->update([
            'judul' => $validatedData['judul'],
            'image' => $filePath,
            'desc' => $dom->saveHTML(),
        ]);
    
        return redirect()->route('berita.editBerita', ['id' => $id])->with('success', 'Data berhasil diupdate!');
    }

    public function deleteBerita($id)
    {
        $artikel = Berita::find($id);
        if (\File::exists('storage/artikel/'.$artikel->image)) {
            \File::delete('storage/artikel/'.$artikel->image);
        }

        Berita::whereId($id)->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('berita.dataBerita')->with('success', 'Data berhasil dihapus.');

    }
    //---------------------------------------------END BERITA ADMIN CONTROLLER---------------------------------------------

    //----------------------------------------------------------HALAMAN--------------------------------------------

    public function dataHalaman($page) {
        $halamans = DB::table('halaman')
            ->select('id', 'page', 'kategori', 'judul', 'desc') // Tambahkan 'id' di sini
            ->where('page', $page)
            ->get();
    
        return view('halamanAdmin.halamanAdmin', compact('halamans', 'page'));
    }

    public function halamanAdmin($page) {
        $halamans = DB::table('halaman')
            ->select('id', 'page', 'kategori', 'judul', 'desc') // Tambahkan 'id' di sini
            ->where('page', $page)
            ->get();
    
        return view('halamanAdmin.halamanAdmin', compact('halamans', 'page'));
    }

    public function createHalamanAdmin(){
        return view('halamanAdmin.createHalamanAdmin');
    }

    public function storeHalamanAdmin(Request $request)
    {
    // Aturan Validasi
    $rules = [
        'judul' => 'required',
        'desc'  => 'required|min:20',
    ];

    // Pesan Kesalahan
    $messages = [
        'judul.required' => 'Judul wajib diisi!',
        'desc.required' => 'Deskripsi wajib diisi!',
    ];

    // Validasi Input
    $validatedData = $request->validate($rules, $messages);

        // Proses Konten Deskripsi dengan DOMDocument
    $storagePath = "storage/content-artikel";
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
    Halaman::create([
        'judul' => $validatedData['judul'],
        'desc'  => $dom->saveHTML(),
    ]);

    // Redirect dengan Pesan Sukses
    return redirect()->route('halamanAdmin.halamanAdmin')->with('success', 'Data berhasil disimpan!');
}
//akhir

public function editHalamanAdmin($id) {
    $halaman = Halaman::find($id);
    $kategori = $halaman->kategori; // Ambil kategori dari objek halaman

    return view('halamanAdmin.editHalamanAdmin', compact('halaman', 'kategori'));
}

public function updateHalamanAdmin(Request $request, $id)
    {
        $halaman = Halaman::find($id);

       
        $rules = [
            'judul' =>'required',
            'desc' =>'required|min:20',
        ];

        $messages = [
            'judul.required' => 'Judul wajib diisi!',
            'desc.required' => 'Judul wajib diisi!',
        ];


        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()) {
            return redirect()->back()
                            ->withErrors($validator)
                            ->withInput();
        }

        //Deskripsi
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

        $halaman->update([
            'judul' => $request->judul,
            'desc' => $dom->saveHTML(),
        ]);

        return redirect('halamanAdmin/editHalamanAdmin/'.$id)->with('success', 'data berhasil di update');

    }

    public function deleteHalamanAdmin(){
        
    }

    public function halamanIndex($kategori) {
        // Ambil data halaman berdasarkan kategori yang dipilih
        $halamans = Halaman::where('kategori', $kategori)->get();
    
        // Jika Anda ingin menampilkan satu halaman berdasarkan judul atau ID
        // Anda bisa menggunakan Halaman::where('judul', $judul)->first();
    
        return view('index.halaman', [
            'halamans' => $halamans,
            'kategori' => $kategori // Kirim kategori ke view jika diperlukan
        ]);
    }

 //--------------------------------------- HOMMEPAGE / BERANDA ------------------------------------------------------------  

public function dataHomepage()
{
    return view('homepage.homepage', [
        'homepages' => Homepage::all()
    ]);
}

public function homepage()
{
    return view('homepage.homepage', [
        'homepages' => Homepage::all()
    ]);
}

public function createHomepage()
{
    return view('homepage.createHomepage');
}

public function storeHomepage(Request $request)
{
    $rules = [
        'judul' => 'required',
        'image' => 'nullable|max:1000|mimes:jpg,jpeg,png', // Ubah 'required' menjadi 'nullable'
        'desc'  => 'required|min:1',
        'content' => 'required',
    ];

    $messages = [
        'content.required' => 'Content/Category wajid diisi!',
        'judul.required' => 'Judul wajib diisi!',
        'desc.required' => 'Deskripsi wajib diisi!',
    ];

    $validatedData = $request->validate($rules, $messages);

    // Proses untuk menyimpan gambar hanya jika ada gambar yang diupload
    $filePath = null;
    if ($request->hasFile('image')) {
        // Upload Image untuk homepage
        $fileName = time() . '.' . $request->image->extension();
        $filePath = $request->file('image')->storeAs('homefoto', $fileName, 'public'); // Simpan di homefoto
    }

    // Proses konten deskripsi
    $storagePath = 'public/homefoto'; // Ubah ke homefoto
    $dom = new \DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    libxml_clear_errors();

    $images = $dom->getElementsByTagName('img');
    foreach ($images as $img) {
        $src = $img->getAttribute('src');
        if (preg_match('/data:image/', $src)) {
            preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
            $mimetype = $groups['mime'];
            $fileNameContentRand = substr(md5(uniqid()), 6, 6) . '_' . time();
            $fileContentPath = "$storagePath/$fileNameContentRand.$mimetype";

            Image::make($src)->resize(1200, 1200)
                ->encode($mimetype, 100)
                ->save(storage_path("app/$fileContentPath"));

            $new_src = asset("storage/$fileContentPath");
            $img->setAttribute('src', $new_src);
            $img->setAttribute('class', 'img-responsive');
        }
    }

    Homepage::create([
        'content' => $validatedData['content'],
        'judul' => $validatedData['judul'],
        'desc'  => $dom->saveHTML(),
        'image' => $filePath, // Jika tidak ada gambar, ini akan null
            ]);

    return redirect()->route('homepage.createHomepage')->with('success', 'Data berhasil disimpan!');
}

public function editHomepage($id)
{
    $homepage = Homepage::find($id);
    return view('homepage.editHomepage', compact('homepage'));
}

public function updateHomepage(Request $request, $id)
{
    $homepage = Homepage::find($id);

    if (!$homepage) {
        return redirect()->back()->withErrors(['error' => 'Homepage tidak ditemukan.']);
    }

    // Aturan validasi
    $rules = [
        'content' => 'required',
        'judul' => 'required',
        'desc' => 'required|min:1',
        'image' => 'nullable|max:1000|mimes:jpg,jpeg,png', // Ganti 'required' dengan 'nullable'
    ];

    $messages = [
        'content.required' => 'Content/Category wajib diisi!',
        'judul.required' => 'Judul wajib diisi!',
        'desc.required' => 'Deskripsi wajib diisi!',
    ];

    // Validasi
    $validatedData = $request->validate($rules, $messages);

    // Upload Image
    if ($request->hasFile('image')) {
        // Hapus gambar lama jika ada
        if (\File::exists('storage/homefoto/' . $homepage->image)) { // Ubah ke homefoto
            \File::delete('storage/homefoto/' . $homepage->image);
        }

        // Simpan gambar baru
        $fileName = time() . '.' . $request->image->extension();
        $filePath = $request->file('image')->storeAs('homefoto', $fileName, 'public'); // Ubah ke homefoto
    } else {
        // Jika tidak ada gambar baru, gunakan gambar lama
        $filePath = $homepage->image;
    }

    // Proses konten deskripsi
    $storagePath = 'public/homefoto'; // U bah ke homefoto
    $dom = new \DOMDocument();
    libxml_use_internal_errors(true);
    $dom->loadHTML($request->desc, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
    libxml_clear_errors();

    $images = $dom->getElementsByTagName('img');
    foreach ($images as $img) {
        $src = $img->getAttribute('src');
        if (preg_match('/data:image/', $src)) {
            preg_match('/data:image\/(?<mime>.*?)\;/', $src, $groups);
            $mimetype = $groups['mime'];
            $fileNameContentRand = substr(md5(uniqid()), 6, 6) . '_' . time();
            $fileContentPath = "$storagePath/$fileNameContentRand.$mimetype";

            Image::make($src)->resize(1200, 1200)
                ->encode($mimetype, 100)
                ->save(storage_path("app/$fileContentPath"));

            $new_src = asset("storage/$fileContentPath");
            $img->setAttribute('src', $new_src);
            $img->setAttribute('class', 'img-responsive');
        }
    }

    // Update homepage
    $homepage->update([
        'content' => $validatedData['content'],
        'judul' => $validatedData['judul'],
        'desc' => $dom->saveHTML(),
        'image' => $filePath,
    ]);

    return redirect()->route('homepage.editHomepage', ['id' => $id])->with('success', 'Data berhasil diupdate!');
}

public function deleteHomepage($id)
{
    $homepage = Homepage::find($id);
    if (\File::exists('storage/homefoto/' . $homepage->image)) {
        \File::delete('storage/homefoto/' . $homepage->image);
    }

    Homepage::whereId($id)->delete();

    // Redirect dengan pesan sukses
    return redirect()->route('homepage.dataHomepage')->with('success', 'Data berhasil dihapus.');
}

}
