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
        <div class="card bg-white col-xxl-8 text-left border-0">
            <p class="">
                <a href="/" class="text-decoration-none text-dark"> Beranda</a> / <a href="/berita/berita" class="text-decoration-none text-dark"> Berita</a> / {{$artikel->judul}}
            </p>
            <h3 class="fw-bold mb-3">{{ $artikel->judul }}</h3>
            <p class="mb-3">Indonesia / 22 Oktober 2024</p>
            <img src="{{asset('storage/artikel/'.$artikel->image) }}" class="img-fluid rounded-3 mb-3 col-xl-8" alt="" >
            {!! $artikel->desc !!}
        </div>
    </div>

</section>
<!-- end Detail Artikel-->  


@endsection