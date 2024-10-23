@extends('layoutes.main') 

@section('content')

<!---crousel mulai--->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="/assets/img/background.png" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
<!---crousel akhir--->

   
<!--komponen baru-->

<div class="container mt-5">
    <!-- Judul -->
    <h2 class="text-center mb-4">SKU (Surat Keterangan Usaha)</h2>
    
    <!-- Syarat Pembuatan Ahli Waris -->
    <h3 class="mt-4">PERSYARATAN PERMOHONAN SURAT KETERANGAN USAHA</h3>
    <ol class="list-group list-group-numbered mb-4">
      <li class="list-group-item">Surat Pengantar RT/RW</li>
      <li class="list-group-item">Kartu Tanda Penduduk (KTP) yang masih berlaku (Asli & Fotokopi)</li>
      <li class="list-group-item">Kartu Keluarga (KK) (Fotokopi)</li>
      <li class="list-group-item">Surat Pernyataan/Permohonan</li>
    </ol>

    <!-- Sistem, Mekanisme, dan Prosedur -->
    <h3 class="mt-4">Sistem, Mekanisme, dan Prosedur</h3>
    <ol class="list-group list-group-numbered mb-4">
      <li class="list-group-item">Membuat Surat Pengantar RT/RW. Anda hanya perlu mendatangi Pengurus RT, Surat Pengantar yang sudah jadi akan ditandatangani Ketua RT, untuk kemudian disahkan oleh RW.</li>
      <li class="list-group-item">Satukan dengan berkas lainnya untuk dibawa ke Kantor Kelurahan/Kepala Desa</li>
      <li class="list-group-item">Anda akan diminta mengisi formulir pembuatan Surat Keterangan Usaha</li>
      <li class="list-group-item">Setelah berkas persyaratan dan formulir Anda serahkan kepada petugas, Anda tinggal menunggu SKU dibuat (Waktu menunggu tergantung masing-masing Kelurahan/Desa)</li>
      <li class="list-group-item">Setelah Surat Keterangan Usaha (SKU) anda jadi dan ditandatangani oleh Lurah/Kepala Desa</li>
      <li class="list-group-item">SKU tersebut anda bawa ke Kantor Kecamatan</li>
      <li class="list-group-item">SKU anda akan ditandatangani oleh Camat dan disahkan dengan stempel Kecamatan.</li>
      <li class="list-group-item">Surat Keterangan Usaha (SKU) memiliki masa berlaku satu tahun sejak tanggal diterbitkan.</li>
    </ol>
  </div><!--komponen baru end-->

@endsection
