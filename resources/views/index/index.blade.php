@extends('layoutes.main')
@section('content')

<!-- Hero Section -->
<section id="hero" class="hero section dark-background">
    <div id="hero-carousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="container position-relative">

            <!-- Slide 1 -->
            <div class="carousel-item active">
                <div class="carousel-container">
                    @if($homepages->where('content', 'Slide_1')->first())
                        <h2>{{ $homepages->where('content', 'Slide_1')->first()->judul }}</h2>
                        <p>{!! $homepages->where('content', 'Slide_1')->first()->desc !!}</p>
                    @endif
                </div>
            </div><!-- End Carousel Item 1 -->

            <!-- Slide 2 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    @if($homepages->where('content', 'Slide_2')->first())
                        <h2>{{ $homepages->where('content', 'Slide_2')->first()->judul }}</h2>
                        <p>{!! $homepages->where('content', 'Slide_2')->first()->desc !!}</p>
                    @endif  
                </div>
            </div><!-- End Carousel Item 2 -->

            <!-- Slide 3 -->
            <div class="carousel-item">
                <div class="carousel-container">
                    @if($homepages->where('content', 'Slide_3')->first())
                        <h2>{{ $homepages->where('content', 'Slide_3')->first()->judul }}</h2>
                        <p>{!! $homepages->where('content', 'Slide_3')->first()->desc !!}</p>
                    @endif  
                </div>
            </div><!-- End Carousel Item 3 -->

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

            <ol class="carousel-indicators"></ol>

        </div>
    </div>
</section><!-- /Hero Section -->

<!-- Featured Services Section -->
<section id="featured-services" class="featured-services section">
    <div class="container">
        <div class="row justify-content-center gy-4">

            <div class="col-md-4">
                <div class="service-item item-cyan position-relative">
                    <div class="icon">
                        <i class="bi bi-activity"></i>
                    </div>
                    <a class="Jumlah Desa">
                        @if($homepages->where('content', 'Jumlah Desa')->first())
                            <h3>{{ $homepages->where('content', 'Jumlah Desa')->first()->judul }}</h3>
                            <h1>{!! $homepages->where('content', 'Jumlah Desa')->first()->desc !!}</h1>
                        @endif
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-item item-orange position-relative">
                    <div class="icon">
                        <i class="bi bi-broadcast"></i>
                    </div>
                    <a class="Jumlah Penduduk">
                        @if($homepages->where('content', 'Jumlah Penduduk')->first())
                            <h3>{{ $homepages->where('content', 'Jumlah Penduduk')->first()->judul }}</h3>
                            <h1>{!! $homepages->where('content', 'Jumlah Penduduk')->first()->desc !!}</h1>
                        @endif
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <div class="service-item item-teal position-relative">
                    <div class="icon">
                        <i class="bi bi-easel"></i>
                    </div>
                    <a class="Luas Wilayah Cililin">
                        @if($homepages->where('content', 'Luas Wilayah Cililin')->first())
                            <h3>{{ $homepages->where('content', 'Luas Wilayah Cililin')->first()->judul }}</h3>
                            <h1>{!! $homepages->where('content', 'Luas Wilayah Cililin')->first()->desc !!}</h1>
                        @endif
                    </a>
                </div>
            </div>

        </div>
    </div>
</section><!-- /Featured Services Section -->

<!-- Camat Section -->
<section id="camat" class="about section light-background">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-6 d-flex justify-content-center align-items-start" data-aos="fade-up" data-aos-delay="100">
                @if($homepages->where('content', 'Camat')->first())
                    <img src="{{ asset('storage/' . $homepages->where('content', 'Camat')->first()->image) }}" class="img-fluid" alt="Camat Cililin">
                @endif
            </div>
            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                @if($homepages->where('content', 'Camat')->first())
                    <h3>{{ $homepages->where('content', 'Camat')->first()->judul }}</h3>
                    <p class="fst-italic">{!! $homepages->where('content', 'Camat')->first()->desc !!}</p>
                @endif
            </div>
        </div>
    </div>
</section><!-- /Camat Section -->

<!-- About Section -->
<section id="about" class="about section light-background">
    <div class="container">
        <div class="row gy-4">
        <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
            @if($homepages->where('content', 'Link Video')->first())
                <img src="{{ asset('storage/' . $homepages->where('content', 'Link Video')->first()->image) }}" class="img-fluid" alt="">
                
                <!-- Mengambil URL dari desc dan menampilkannya dalam tag <a> -->
                <a href="{!! $homepages->where('content', 'Link Video')->first()->desc !!}" class="glightbox pulsating-play-btn" target="_blank">
              
                </a>
            @endif
        </div>

            <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
                @if($homepages->where('content', 'Kecamatan Cililin')->first())
                    <h3>{{ $homepages->where('content', 'Kecamatan Cililin')->first()->judul }}</h3>
                    <p class="fst-italic">{!! $homepages->where('content', 'Kecamatan Cililin')->first()->desc !!}</p>
                @endif
            </div>
        </div>
    </div>
</section><!-- /About Section -->

@endsection