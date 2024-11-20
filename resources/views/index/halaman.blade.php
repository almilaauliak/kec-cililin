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

<!-- Detail Artikel-->
<section id="detail">
    <div class="container col-xxl-8 d-flex justify-content-center">   
        @foreach($halamans as $halaman) <!-- Looping untuk menampilkan semua halaman -->
            <div class="card bg-white col-xxl-8 text-left border-0 mb-4"> <!-- Tambahkan mb-4 untuk margin bawah -->
                <p class="">
                    <a href="/" class="text-decoration-none text-dark"> Beranda</a> / <a href="" class="text-decoration-none text-dark"> </a> {{ $halaman->judul }}
                </p>
                <h3 class="fw-bold mb-3">{{ $halaman->judul }}</h3>
                <img src="{{ asset('storage/artikel/' . $halaman->image) }}" class="img-fluid rounded-3 mb-3 col-xl-8" alt="">
                {!! $halaman->desc !!}
            </div>
        @endforeach
    </div>
</section>
<!-- end Detail Artikel-->  

@endsection