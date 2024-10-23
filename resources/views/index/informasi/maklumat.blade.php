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
    <h2 class="text-center mb-4">Ahli Waris</h2>
    
    <!-- Syarat Pembuatan Ahli Waris -->
    <h3 class="mt-4">Syarat Pembuatan Ahli Waris</h3>
    <ol class="list-group list-group-numbered mb-4">
      <li class="list-group-item">Surat Permohonan</li>
      <li class="list-group-item">Surat Kesaksian 2 (Dua) Orang Saksi</li>
      <li class="list-group-item">Surat Pernyataan para Ahli Waris</li>
      <li class="list-group-item">Fotokopi Surat Nikah</li>
      <li class="list-group-item">Silsilah Ahli Waris</li>
      <li class="list-group-item">Surat Keterangan Kematian</li>
      <li class="list-group-item">Fotokopi KTP / Kartu Keluarga / Akta Kelahiran para Ahli Waris</li>
      <li class="list-group-item">Fotokopi KTP Saksi</li>
      <li class="list-group-item">Surat Pernyataan</li>
    </ol>

    <!-- Sistem, Mekanisme, dan Prosedur -->
    <h3 class="mt-4">Sistem, Mekanisme, dan Prosedur</h3>
    <ol class="list-group list-group-numbered mb-4">
      <li class="list-group-item">Pemohon menunggu hasil Pemeriksaan Berkas Permohonan</li>
      <li class="list-group-item">Petugas melaksanakan Pemeriksaan Berkas Permohonan</li>
      <li class="list-group-item">Petugas melaksanakan Pengetikan Surat Keterangan Susunan Ahli Waris</li>
      <li class="list-group-item">Pemarapan Surat Keterangan Susunan Ahli Waris yang telah dicetak di Kantor Kecamatan Ngamprah</li>
      <li class="list-group-item">Penandatanganan Surat Keterangan Susunan Ahli Waris</li>
      <li class="list-group-item">Penyerahan Berkas Permohonan Surat Keterangan Susunan Ahli Waris</li>
    </ol>
  </div><!--komponen baru end-->

@endsection
