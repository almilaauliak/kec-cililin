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
            <div class="col-lg-4 mb-4">
                <a href="../berita/detail" class="text-decoration-none text-dark">
                <div class="card bg-white border-0">
                    <img src="{{ asset('images/blog-1.jpg') }}" class="img-fluid rounded-4 mb-3" alt="">
                    <h3 class="fw-bold mb-3">Berita Prabowo Subianto Terkini Dan Terbaru Hari Ini</h3>
                    <p>Indonesia / 22 Oktober 2024</p>
                </div> 
                </a>
            </div>   
        <!-- end col --> 
        <!-- Col Berita Per card-->
        <div class="col-lg-4 mb-4">
            <a href="../berita/detail" class="text-decoration-none text-dark">
                <div class="card bg-white border-0">
                    <img src="{{ asset('images/blog-2.jpg') }}" class="img-fluid rounded-4 mb-3" alt="">
                    <h3 class="fw-bold mb-3">Berita Prabowo Subianto Terkini Dan Terbaru Hari Ini</h3>
                    <p>Indonesia / 22 Oktober 2024</p>
                </div> 
                </a>
            </div>   
        <!-- end col --> 
        <!-- Col Berita Per card-->
        <div class="col-lg-4 mb-4">
            <a href="../berita/detail" class="text-decoration-none text-dark">
                <div class="card bg-white border-0">
                    <img src="{{ asset('images/blog-3.jpg') }}" class="img-fluid rounded-4 mb-3" alt="">
                    <h3 class="fw-bold mb-3">Berita Prabowo Subianto Terkini Dan Terbaru Hari Ini</h3>
                    <p>Indonesia / 22 Oktober 2024</p>
                </div> 
                </a>
            </div>   
        <!-- end col -->
        <!-- Col Berita Per card-->
        <div class="col-lg-4 mb-4">
            <a href="../berita/detail" class="text-decoration-none text-dark">
                <div class="card bg-white border-0">
                    <img src="{{ asset('images/blog-4.jpg') }}" class="img-fluid rounded-4 mb-3" alt="">
                    <h3 class="fw-bold mb-3">Berita Prabowo Subianto Terkini Dan Terbaru Hari Ini</h3>
                    <p>Indonesia / 22 Oktober 2024</p>
                </div> 
                </a>
            </div>   
        <!-- end col --> 
        <!-- Col Berita Per card-->
        <div class="col-lg-4 mb-4">
            <a href="../berita/detail" class="text-decoration-none text-dark">
                <div class="card bg-white border-0">
                    <img src="{{ asset('images/blog-5.jpg') }}" class="img-fluid rounded-4 mb-3" alt="">
                    <h3 class="fw-bold mb-3">Berita Prabowo Subianto Terkini Dan Terbaru Hari Ini</h3>
                    <p>Indonesia / 22 Oktober 2024</p>
                </div> 
                </a>
            </div>   
        <!-- end col --> 
        <!-- Col Berita Per card-->
        <div class="col-lg-4 mb-4">
            <a href="../berita/detail" class="text-decoration-none text-dark">
                <div class="card bg-white border-0">
                    <img src="{{ asset('images/blog-6.jpg') }}" class="img-fluid rounded-4 mb-3" alt="">
                    <h3 class="fw-bold mb-3">Berita Prabowo Subianto Terkini Dan Terbaru Hari Ini</h3>
                    <p>Indonesia / 22 Oktober 2024</p>
                </div> 
                </a>
            </div>   
        <!-- end col -->     
        
        </div>
    </div>

</section>
<!-- end Blog Artikel-->  


@endsection