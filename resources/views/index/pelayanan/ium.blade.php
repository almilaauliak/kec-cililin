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
    <h2 class="text-center mb-4"> Standar Pelayanan Ium (Ijin Usaha Mikro) </h2>
    
    <!-- Syarat Pembuatan Ahli Waris -->
    <h3 class="mt-4">Persyaratan</h3>
    <ol class="list-group list-group-numbered mb-4">
      <li class="list-group-item">Membawa Foto Copy KK</li>
      <li class="list-group-item">Membawa Foto Copy KTP</li>
      <li class="list-group-item">Surat Keterangan Usaha dari Desa</li>
      <li class="list-group-item">Form Permohonan Pengajuan IUM</li>
      <li class="list-group-item"> Surat Pernyataan Kebenaran Dokumen</li>
      <li class="list-group-item"> Pas Photo 4x6 (4 lembar)</li>
    </ol>

    <!-- Sistem, Mekanisme, dan Prosedur -->
    <h3 class="mt-4">Sistem, Mekanisme, dan Prosedur</h3>
        <img src="/assets/img/ium.png" alt="Icon" style="width: 500px; height: 500x; vertical-align: middle;"> 
    
    <ol class="list-group list-group-numbered mb-4">
      <li class="list-group-item">Pemohon datang mengambil nomor antrian</li>
      <li class="list-group-item">Pemohon mengajukan berkas kepada petugas</li>
      <li class="list-group-item">Petugas meneliti kelengkapan berkas (Jika Berkas lengkap maka proses akan dilanjutkan, jika tidak lengkap maka berkas dikembalikan kepada pemohon untuk dilengkapi )</li>
      <li class="list-group-item">Petugas mencatat pada buku regester IUM</li>
      <li class="list-group-item">Petugas membuat Surat Keterangan IUM dan menyampaikan kepada Kasi Pelayanan untuk diverifikasi dan divalidasi ( Jika Surat IUM sudah benar disampaikan kepada camat untuk ditandatangani , jika salah dikembalikan kepada petugas entry IUM untuk diperbaiki )</li>
      <li class="list-group-item">Petugas Pelayanan dan Kasi Pelayanan atau Kasi yang membidangi memberikan paraf</li>
      <li class="list-group-item">Camat menandatangani surat IUM</li>
      <li class="list-group-item">Petugas menyerahkan Surat Keterangan IUM kepada Pemohon</li>
    </ol>

    <h3 class="mt-4">waktu penyelesaian</h3>
    <ol class="list-group list-group-numbered mb-4">
      <p>15  Menit  ( apabila berkas lengkap dan  pimpinan ada di tempat,kalau pimpinan dinas luar bisa ditinggal dan nanti dihubungi oleh petugas via telepon pemohon bila sudah ditanda tangani pimpinan ) </p>
    </ol>
  </div><!--komponen baru end-->

@endsection
