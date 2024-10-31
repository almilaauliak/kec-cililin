
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard - Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../assetsAdmin/img/kbb.png" rel="icon">
  <link href="../assetsAdmin/img/kbb.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../assetsAdmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../assetsAdmin/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../assetsAdmin/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../assetsAdmin/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="../assetsAdmin/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="../assetsAdmin/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../assetsAdmin/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../assetsAdmin/css/style.css" rel="stylesheet">

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
        <img src="../assetsAdmin/img/kbb.png" alt="">
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

      
      <li class="nav-heading">Pages Data</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="Obat">
          <i class="bi bi-house-door"></i>
          <span>Data Beranda</span>
        </a>
      </li><!-- End Page Petugas Nav -->        
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#pemerintahanDropdown" role="button" aria-expanded="false" aria-controls="pemerintahanDropdown">
          <i class="bi bi-layout-text-window-reverse"></i><span>Data Pemerintahan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>

        <!-- Sub Bab: Camat dan Sekcam -->
        <ul class="collapse nav-content" id="pemerintahanDropdown">
          <!-- Dropdown Camat -->
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#camatDropdown" role="button" aria-expanded="false" aria-controls="camatDropdown">
              <i class="bi bi-layout-text-window-reverse"></i><span>Camat</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul class="collapse nav-content" id="camatDropdown">
              <li><a href="#"><i class="bi bi-circle"></i> PMD</a></li>
              <li><a href="#"><i class="bi bi-circle"></i> BINWAS</a></li>
              <li><a href="#"><i class="bi bi-circle"></i> PENYALIK</a></li>
              <li><a href="#"><i class="bi bi-circle"></i> TRANTIBUM</a></li>
            </ul>
          </li>

          <!-- Dropdown Sekcam -->
          <li class="nav-item">
            <a class="nav-link collapsed" data-bs-toggle="collapse" href="#sekcamDropdown" role="button" aria-expanded="false" aria-controls="sekcamDropdown">
              <i class="bi bi-layout-text-window-reverse"></i><span>Sekcam</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul class="collapse nav-content" id="sekcamDropdown">
              <li><a href="#"><i class="bi bi-circle"></i> Sub Bidang Perencanaan dan Keuangan</a></li>
              <li><a href="#"><i class="bi bi-circle"></i> Sub Bidang Kepegawaian dan Umum</a></li>
            </ul>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#informasi-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-info-circle"></i><span>Data Informasi</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="informasi-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>Sejarah Kecamatan</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Struktur Organisasi</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Maklumat Pelayanan</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Jam Pelayanan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Informasi Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="Obat">
          <i class="bi bi-card-list"></i>
          <span>Data Desa</span>
        </a>
      </li><!-- End Desa Nav -->
      
      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#pelayanan-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-briefcase"></i><span>Data Pelayanan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="pelayanan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>Ahli Waris</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>SKU (Surat Keterangan Usaha)</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>IUM (Ijin Usaha Mikro)</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>SPPT PBB</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>IMB</span>
            </a>
          </li> 
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>E-KTP</span>
            </a>
          </li> 
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Kartu Keluarga</span>
            </a>
          </li>    
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Surat Pindah</span>
            </a>
          </li>     
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Fatwa Waris</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>SKKB (Surat Keterangan Kelakuan Baik)</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>SKTM (Surat Keteranan Tidak Mampu)</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>Rekomendasi Proposal</span>
            </a>
          </li>
          <li>
            <a href="tables-data.html">
              <i class="bi bi-circle"></i><span>PPARS</span>
            </a>
          </li>
        </ul>
      </li><!-- End Pelayanan Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#kegiatan-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-file-earmark-richtext"></i><span>Data Kegiatan</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="kegiatan-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="tables-general.html">
              <i class="bi bi-circle"></i><span>Dokumentasi Kegiatan</span>
            </a>
          </li>
        </ul>
      </li><!-- End Kegiatan Nav -->


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
  <script src="../assetsAdmin/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="../assetsAdmin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../assetsAdmin/vendor/chart.js/chart.umd.js"></script>
  <script src="../assetsAdmin/vendor/echarts/echarts.min.js"></script>
  <script src="../assetsAdmin/vendor/quill/quill.js"></script>
  <script src="../assetsAdmin/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="../assetsAdmin/vendor/tinymce/tinymce.min.js"></script>
  <script src="../assetsAdmin/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="../assetsAdmin/js/main.js"></script>

</body>

</html>