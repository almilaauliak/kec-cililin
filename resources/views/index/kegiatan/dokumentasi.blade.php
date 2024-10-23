@extends('layoutes.main')

@section('content')

<!---carousel mulai--->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="/assets/img/background.png" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
<!---carousel akhir--->

<!--komponen baru-->
<div class="container mt-5">
    <!-- Judul -->
    <h2 class="text-center mb-4">Dokumentasi Kegiatan</h2>

    <h2 class="text-primary"><i class="fas fa-images icon"></i> Foto - Foto Kegiatan</h2>

    <!-- Galeri Foto -->
    <div class="row">
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('images/kegiatan1.jpg') }}" class="card-img-top" alt="Kegiatan 1">
                <div class="card-body">
                    <p class="card-text">Kegiatan Pengawasan Program Desa</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('images/kegiatan2.jpg') }}" class="card-img-top" alt="Kegiatan 2">
                <div class="card-body">
                    <p class="card-text">Pembinaan Aparatur Desa</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mb-4">
                <img src="{{ asset('images/kegiatan3.jpg') }}" class="card-img-top" alt="Kegiatan 3">
                <div class="card-body">
                    <p class="card-text">Pelatihan untuk Pengembangan SDM</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!--komponen baru end-->

@endsection
