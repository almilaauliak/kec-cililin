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

<!-- Blog Artikel-->
<section id="blog">
<h2 class="text-center mb-4">Berita</h2>
    <div class="container col-xxl-10 py-5">   
        <div class="row">


        <!-- Col Berita Per card-->
        @foreach ($artikels as $artikel)
                    <div class="col-lg-4 mb-4">
                        <a href="/index/detail/{{ $artikel->id }}" class="text-decoration-none text-dark">
                            <div class="card bg-white border-0">
                               <!-- <img src="{{ asset('public/artikel/' . $artikel->image) }}" class="img-fluid rounded-4 mb-3"                              
                                    alt="">-->
                                    <img src="{{ asset('storage/' . $artikel->image) }}" class="img-fluid rounded-4 mb-3"                              
                                    alt="">
                                <h3 class="fw-bold mb-3">{{ $artikel->judul }}</h3>
                                <p>Berita / {{ \Carbon\Carbon::parse($artikel->created_at)->format('d M Y') }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach  
        
        </div>
    </div>

</section>
<!-- end Blog Artikel-->  


@endsection