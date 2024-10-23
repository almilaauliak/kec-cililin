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

   
<!--komponen baru-->

<div class="container mt-5">
    <!-- Judul -->
    <h2 class="text-center mb-4">Pembinaan dan Pengawasan</h2>

    <h2 class="text-primary"><i class="fas fa-users icon"></i> Program Pembinaan dan Pengawasan (Binwas)</h2>
        <p class="lead">Di Kecamatan Cililin, Kabupaten Bandung Barat, Pembinaan dan Pengawasan sering melibatkan berbagai program dan inisiatif yang bertujuan untuk meningkatkan kesejahteraan dan kualitas hidup penduduk.</p>
        <ul class="program-list">
    <li><i class="fas fa-users icon"></i> <strong>Partisipasi Perencanaan Pembangunan:</strong> Membimbing dan mendorong masyarakat berpartisipasi dalam perencanaan pembangunan Desa/Kecamatan serta fasilitasi sinkronisasi pembangunan Daerah dengan Desa.</li>
    <li><i class="fas fa-handshake icon"></i> <strong>Fasilitasi Kerja Sama Desa:</strong> Fasilitasi kerja sama antar Desa dan dengan pihak ketiga, serta penataan dan pemanfaatan ruang Desa.</li>
    <li><i class="fas fa-gavel icon"></i> <strong>Pembinaan dan Pengawasan Pemerintahan:</strong> Membagi tugas, membuat laporan, dan mengevaluasi kegiatan pembinaan serta pengawasan pemerintahan Desa.</li>
    <li><i class="fas fa-hammer icon"></i> <strong>Koordinasi dan Fasilitasi Pembangunan:</strong> Koordinasi pendampingan Desa, pembangunan kawasan perdesaan, dan pemberdayaan masyarakat Desa.</li>
    <li><i class="fas fa-file icon"></i> <strong>Tugas Administratif Pemerintahan:</strong> Mengumpulkan bahan dan melaksanakan kebijakan Camat dalam urusan pemerintahan yang dilimpahkan oleh Bupati.</li>
    <li><i class="fas fa-tasks icon"></i> <strong>Lain-lain:</strong> Melaksanakan tugas kedinasan lain yang diperintahkan oleh pimpinan.</li>
</ul>


@endsection
