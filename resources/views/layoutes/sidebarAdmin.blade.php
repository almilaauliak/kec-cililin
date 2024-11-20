
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assetsAdmin/img/kbb.png" rel="icon">
  <link href="/assetsAdmin/img/kbb.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assetsAdmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assetsAdmin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assetsAdmin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assetsAdmin/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/assetsAdmin/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/assetsAdmin/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assetsAdmin/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="/assetsAdmin/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Updated: Apr 20 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  {{-- Summernote CSS --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.20/summernote-bs5.min.css" />
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="/assetsAdmin/img/kbb.png" alt="">
        <span class="d-none d-lg-block">ADMIN</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <span class="d-none d-md-block dropdown-toggle ps-2">Almila</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>Almila</h6>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="#">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

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

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{ url('/admin') }}">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="Obat">
          <i class="bi bi-person"></i>
          <span>Data Petugas</span>
        </a>
      </li><!-- End Page Petugas Nav -->

      
      <li class="nav-heading">Pages Kelola Halaman</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('homepage/homepage') }}">
          <i class="bi bi-house-door"></i>
          <span>Data Beranda</span>
        </a>
      </li><!-- End Page Petugas Nav -->        
      <!-- dari sini copynya

      okkk-->
      
      <!--mulai -->
     
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('halamanAdmin/halamanAdmin/Pemerintahan') }}">
        <i class="bi bi-layout-text-window-reverse"></i>
          <span>Kelola Halaman Pemerintahan</span>
        </a>
      </li><!-- End Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('halamanAdmin/halamanAdmin/Informasi') }}">
          <i class="bi bi-info-circle"></i>
          <span>Kelola Halaman Informasi</span>
        </a>
      </li><!-- End Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('halamanAdmin/halamanAdmin/Desa') }}">
          <i class="bi bi-card-list"></i>
          <span>Kelola Halaman Desa</span>
        </a>
      </li><!-- End Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('halamanAdmin/halamanAdmin/Pelayanan') }}">
          <i class="bi bi-briefcase"></i>
          <span>Kelola Halaman Pelayanan</span>
        </a>
      </li><!-- End Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('halamanAdmin/halamanAdmin/Kegiatan') }}">
          <i class="bi bi-file-earmark-richtext"></i>
          <span>Kelola Halaman Kegiatan</span>
        </a>
      </li><!-- End Page Nav -->
     
      <li class="nav-item">
        <a class="nav-link collapsed" href="{{ url('berita/beritaAdmin') }}">
          <i class="bi bi-newspaper"></i>
          <span>Berita</span>
        </a>
      </li><!-- End Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->
 

  <main id="main" class="main">

  @yield('contentAdmin')

  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
        <div class="credits">
          
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assetsAdmin/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/assetsAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assetsAdmin/vendor/chart.js/chart.umd.js"></script>
  <script src="/assetsAdmin/vendor/echarts/echarts.min.js"></script>
  <script src="/assetsAdmin/vendor/quill/quill.js"></script>
  <script src="/assetsAdmin/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/assetsAdmin/vendor/tinymce/tinymce.min.js"></script>
  <script src="/assetsAdmin/vendor/php-email-form/validate.js"></script>


  <!-- Template Main JS File -->
  <script src="/assetsAdmin/js/main.js"></script>

</body>

</html>