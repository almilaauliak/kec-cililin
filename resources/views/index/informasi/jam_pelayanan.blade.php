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
    <h2 class="text-center mb-4">Jam Pelayanan</h2>
    
    <!-- Syarat Pembuatan Ahli Waris -->
    <h3 class="mt-4">Jam Oprasional</h3>
      <p> Hari Senin 08.00 – 14.00 </p>
      <p> Hari Selasa 08.00 – 14.00 </p>
      <p> Hari Rabu 08.00 – 14.00 </p>
      <p> Hari Kamis 08.00 – 14.00 </p>
      <p> Hari Jum’at 08.00 – 11.30</p>
      <p> Hari Hari Sabtu Tutup </p>
      <p> Hari Hari Minggu Tutup </p>
      <p> Tanggal Merah Libur !!!</p>
      

  </div><!--komponen baru end-->

@endsection
