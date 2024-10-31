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
        @foreach ($artikels as $item)
                    <div class="col-lg-4 mb-4">
                        <a href="/berita/detail/{{ $item->id }}" class="text-decoration-none text-dark">
                            <div class="card bg-white border-0">
                                <img src="{{ asset('storage/artikel/' . $item->image) }}" class="img-fluid rounded-4 mb-3"
                                    alt="">
                                <h3 class="fw-bold mb-3">{{ $item->judul }}</h3>
                                <p>Berita / 31 Oct 2022</p>
                            </div>
                        </a>
                    </div>
                @endforeach  
        
        </div>
    </div>

</section>
<!-- end Blog Artikel-->  


@endsection