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
    <h2 class="text-center mb-4">Pemberdayaan Masyarakat Desa</h2>

    <h2 class="text-primary"><i class="fas fa-users icon"></i> Program Pemberdayaan Masyarakat Desa (PMD)</h2>
        <p class="lead">Di Kecamatan Cililin, Kabupaten Bandung Barat, pemberdayaan masyarakat desa sering melibatkan berbagai program dan inisiatif yang bertujuan untuk meningkatkan kesejahteraan dan kualitas hidup penduduk.</p>
        <ul class="program-list">
            <li><i class="fas fa-seedling icon"></i> <strong>Pengembangan Pertanian:</strong> Program pelatihan dan bantuan untuk meningkatkan produktivitas pertanian, termasuk penggunaan teknologi pertanian modern dan pengelolaan sumber daya alam yang berkelanjutan.</li>
            <li><i class="fas fa-graduation-cap icon"></i> <strong>Pendidikan dan Pelatihan:</strong> Peningkatan akses terhadap pendidikan formal dan non-formal, serta pelatihan keterampilan untuk mendukung peluang kerja dan usaha lokal.</li>
            <li><i class="fas fa-store icon"></i> <strong>Pengembangan UMKM:</strong> Dukungan untuk usaha mikro, kecil, dan menengah melalui akses ke modal, pelatihan manajemen bisnis, dan pemasaran produk lokal.</li>
            <li><i class="fas fa-heartbeat icon"></i> <strong>Kesehatan dan Kesejahteraan:</strong> Program kesehatan masyarakat, penyuluhan gizi, dan akses terhadap layanan kesehatan yang lebih baik.</li>
            <li><i class="fas fa-road icon"></i> <strong>Pembangunan Infrastruktur:</strong> Pembangunan dan perbaikan infrastruktur dasar seperti jalan, jembatan, dan fasilitas umum untuk mendukung aktivitas ekonomi dan mobilitas warga.</li>
            <li><i class="fas fa-landmark icon"></i> <strong>Pelestarian Budaya dan Pariwisata:</strong> Promosi budaya lokal dan pengembangan pariwisata berbasis masyarakat untuk meningkatkan pendapatan dan memperkenalkan kekayaan budaya setempat.</li>
        </ul>
  </div><!--komponen baru end-->

@endsection
