@extends('layoutes.main')
@section('content')
<!-- Hero Section -->
<section id="hero" class="hero section dark-background">

<!-- <img src="//assets/img/hero-bg.jpg" alt="" data-aos="fade-in"> -->

<div id="hero-carousel" class="carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

  <div class="container position-relative">

    <div class="carousel-item active">
      <div class="carousel-container">
        <h2>Kecamatan Cililin, Kabupaten Bandung Barat</h2>
        <p>Temukan informasi publik terkini dari Kecamatan Cililin</p>
        <a href="#about" class="btn-get-started">Read More</a>
      </div>
    </div><!-- End Carousel Item -->

    <div class="carousel-item">
      <div class="carousel-container">
        <h2>Visi</h2>
        <p>Visi</p>
      </div>
    </div><!-- End Carousel Item -->

    <div class="carousel-item">
      <div class="carousel-container">
        <h2>Misi</h2>
        <p>Misi.</p>
      </div>
    </div><!-- End Carousel Item -->

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
          <a href="service-details.html" class="stretched-link">
            <h3>Jumlah Desa</h3>
            <h1>11</h1>
          </a>
          </div>
      </div>
      <div class="col-md-4">
        <div class="service-item item-orange position-relative">
          <div class="icon">
            <i class="bi bi-broadcast"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Jumlah Penduduk</h3>
            <h1>3902</h1>
          </a>
          </div>
      </div>
      <div class="col-md-4">
        <div class="service-item item-teal position-relative">
          <div class="icon">
            <i class="bi bi-easel"></i>
          </div>
          <a href="service-details.html" class="stretched-link">
            <h3>Luas Wilayah Cililin</h3>
            <h1>8913931</h1>
          </a>
         
        </div>
      </div>
    </div>
  </div>
</section><!-- /Featured Services Section -->

    <!-- About Section -->
    <section id="about" class="about section light-background">

      <div class="container">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start" data-aos="fade-up" data-aos-delay="100">
            <img src="/assets/img/CililinKBB1.png" class="img-fluid" alt="">
            <a href="https://youtu.be/pufHojsYIik?si=jpTkwj3rYLTIWVCI" class="glightbox pulsating-play-btn"></a>
          </div>
          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="200">
            <h3>Kecamatan Cililin</h3>
            <p class="fst-italic">
            Kecamatan Cililin adalah salah satu kecamatan yang terletak di Kabupaten Bandung Barat, Jawa Barat, Indonesia.
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>Kecamatan ini terkenal sebagai kawasan yang memiliki potensi alam yang cukup kaya, terutama di sektor pertanian, perkebunan, dan sumber daya air.</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Cililin juga dikenal sebagai salah satu daerah penghasil makanan khas, seperti tahu Cililin, yang populer di wilayah Bandung dan sekitarnya.</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Kecamatan ini juga memiliki sejumlah fasilitas umum, seperti sekolah, puskesmas, dan pasar tradisional yang melayani kebutuhan masyarakat setempat.</span></li>
            </ul>
                     </div>
        </div>

      </div>

    </section><!-- /About Section -->


    @endsection