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
    <h2 class="text-center mb-4"> SKU (Surat Keterangan Usaha) </h2>
    
    <!-- Syarat Pembuatan Ahli Waris -->
    <h3 class="mt-4">Persyaratan</h3>
    <ol class="list-group list-group-numbered mb-4">
      <li class="list-group-item">Pengantar Rt, Rw dan kelurahan</li>
      <li class="list-group-item">Surat Keterangan Usaha</li>
      <li class="list-group-item">fc ktp</li>
      <li class="list-group-item">fc kk</li>
      <li class="list-group-item"> foto Usaha berwarna</li>
    </ol>

    <!-- Sistem, Mekanisme, dan Prosedur -->
    <h3 class="mt-4">Sistem, Mekanisme, dan Prosedur</h3>
    <ol class="list-group list-group-numbered mb-4">
      <li class="list-group-item">langkah pertama pembuatan SKU adalah membuat pengantar ke RT dan RW setempat dengan membawa persyaratan ( KTP, KK, foto tempat usaha)</li>
    </ol>

    <h3 class="mt-4">waktu penyelesaian</h3>
    <ol class="list-group list-group-numbered mb-4">
      <p>Apabila terjadi kekurangan persyaratan maka akan makan waktu yang lebih lama</p>
    </ol>
  </div><!--komponen baru end-->

@endsection
