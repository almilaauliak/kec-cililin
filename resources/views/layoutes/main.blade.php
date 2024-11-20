
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Kecamatan Cililin KBB</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="/assets/img/KBB.png" rel="icon">
  <link href="/assets/img/KBB.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Moderna
  * Template URL: https://bootstrapmade.com/free-bootstrap-template-corporate-moderna/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  {{-- Summernote CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="/assets/img/KBB.png" alt="">
        <h1 class="sitename">Kecamatan Cililin</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="/" class="">Beranda</a></li>
          <li class="dropdown"><a href="#"><span>Pemerintahan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li class="dropdown"><a href="#"><span>Camat</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="{{ url('/halaman/PMD') }}">PMD</a></li>
                  <li><a href="{{ url('/halaman/BINWAS') }}">BINWAS</a></a></li>
                  <li><a href="{{ url('/halaman/PENYALIK') }}">PENYALIK</a></li>
                  <li><a href="{{ url('/halaman/TRANTIBUM') }}">TRANTIBUM</a></li>
                </ul>
              </li>
              <li class="dropdown"><a href="#"><span>Sekcam</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                <ul>
                  <li><a href="{{ url('/halaman/Sub Bidang Perencanaan dan Keuangan') }}">Sub Bidang Perencanaan dan Keuangan</a></li>
                  <li><a href="{{ url('/halaman/Sub Bidang Kepegawaian dan Umum') }}">Sub Bidang Kepegawaian dan Umum</a></li>
                </ul>
              </li>      
          </li>     
            </ul>
            <li class="dropdown"><a href="#"><span>Informasi</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                  <li><a href="{{ url('/halaman/Sejarah Kecamatan') }}">Sejarah Kecamatan</a></li>
                  <li><a href="{{ url('/halaman/Struktur Organisasi') }}">Struktur Organisasi</a></li>
                  <li><a href="{{ url('/halaman/Maklumat Pelayanan') }}">Maklumat Pelayanan</a></li>
                  <li><a href="{{ url('/halaman/Jam Pelayanan') }}">Jam Pelayanan</a></li>
                  </li>
              </ul>    
            <li class="dropdown"><a href="#"><span>Desa</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="{{ url('/halaman/Cililin') }}'">Cililin</a></li>
                <li><a href="{{ url('/halaman/Budiharja') }}">Budiharja</a></li>
                <li><a href="{{ url('/halaman/Batulayang') }}">Batulayang</a></li>
                <li><a href="{{ url('/halaman/Bongas') }}">Bongas</a></li>
                <li><a href="{{ url('/halaman/Karanganyar') }}">Karanganyar</a></li>
                <li><a href="{{ url('/halaman/Karangtanjung') }}">Karangtanjung</a></li>
                <li><a href="{{ url('/halaman/Karyamukti') }}">Karyamukti</a></li>
                <li><a href="{{ url('/halaman/kidangpananjung') }}">kidangpananjung</a></li>
                <li><a href="{{ url('/halaman/Mukapayung') }}">Mukapayung</a></li>
                <li><a href="{{ url('/halaman/Nanggerang') }}">Nanggerang</a></li>
                <li><a href="{{ url('/halaman/Rancapanggung') }}">Rancapanggung</a></li>
                </li>
            </ul>  

           
      <li class="dropdown"><a href="#"><span>Pelayanan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="{{ url('/halaman/Ahli Waris') }}">Ahli Waris</a></li>
                <li><a href="{{ url('/halaman/SKU (Surat Keterangan Usaha)') }}">SKU (Surat Keterangan Usaha)</a></li>
                <li><a href="{{ url('/halaman/IUM (Ijin Usaha Mikro)') }}">IUM (Ijin Usaha Mikro)</a></li>
                <li><a href="{{ url('/halaman/SPPT PBB') }}">SPPT PBB</a></li>
                <li><a href="{{ url('/halaman/IMB') }}">IMB</a></li>
                <li><a href="{{ url('/halaman/E-KTP') }}">E-KTP</a></li>
                <li><a href="{{ url('/halaman/Kartu Keluarga') }}">Kartu Keluarga</a></li>
                <li><a href="{{ url('/halaman/Surat Pindah') }}">Surat Pindah</a></li>
                <li><a href="{{ url('/halaman/Fatwa Waris') }}">Fatwa Waris</a></li>
                <li><a href="{{ url('/halaman/SKKB (Surat Keterangan Kelakuan Baik)') }}">SKKB (Surat Keterangan Kelakuan Baik)</a></li>
                <li><a href="{{ url('/halaman/SKTM (Surat Keterangan Tidak Mampu)') }}">SKTM (Surat Keterangan Tidak Mampu)</a></li>
                <li><a href="{{ url('/halaman/Rekomendasi Proposal') }}">Rekomendasi Proposal</a></li>
                <li><a href="{{ url('/halaman/PPARs') }}">PPARs</a></li>
                </li>
            </ul>  

            <li class="dropdown"><a href="#"><span>Kegiatan</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="{{ url('/halaman/Dokumentasi Kegiatan') }}">Dokumentasi Kegiatan</a></li>
                </li>
            </ul>      

          <li><a href="{{ url('index/berita') }}">Berita</a></li>

        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>
      <!--JS SUmmernote-->
    {{-- JQUERY --}}
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>

    {{-- Summernote JS --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                height: 300,
            });
        });
    </script>
      <!--End JS summernote-->
    </div>

    
  </header>

  <main class="main">

  

  @yield('content')

  </main>

  <footer id="footer" class="footer dark-background">

    

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="d-flex align-items-center">
            <span class="sitename">Kecamatan Cililin</span>
          </a>
          <div class="footer-contact pt-3">
            <p>Alamat Kantor</p>
            <p>Jl.Raya Cililin No.1 Desa Cililin, Kab.Bandung Barat</p>
            <p class="mt-3"><strong>Phone:</strong> <span>no telp</span></p>
            <p><strong>Email:</strong> <span>info@example.com</span></p>
          </div>
        </div>
        
        <div class="col-lg-4 col-md-12">
          <h4>Follow Us</h4>
          <div class="social-links d-flex">
            <!--<a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a> -->
            <a href="https://www.instagram.com/kecamatan.cililin"><i class="bi bi-instagram"></i></a>
          </div>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Kecamatan Cililin</strong>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by Kecamatan Cililin Website Develop Almila, Rizal, Zamhar </a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="/assets/vendor/aos/aos.js"></script>
  <script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="/assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

  <!-- Main JS File -->
  <script src="/assets/js/main.js"></script>

</body>

</html>