@extends('layoutes.main')

@section('content')

<!---carousel mulai--->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <img src="/assets/img/background.png" class="d-block w-100" alt="...">
    </div>
  </div>
</div>
<!---carousel akhir--->

<!--komponen baru-->
<div class="container mt-5">
    <!-- Judul -->
    <h2 class="text-center mb-4">Tugas Penyuluh Kecamatan</h2>

    <h2 class="text-primary"><i class="fas fa-users icon"></i> Tugas Penyuluh di Kecamatan Cililin</h2>
        <p class="lead">Penyuluh di Kecamatan Cililin memiliki peran penting dalam memberikan informasi, edukasi, dan pembinaan kepada masyarakat, sesuai dengan bidang masing-masing. Berikut adalah beberapa tugas utama penyuluh kecamatan:</p>
        <ul class="program-list">
    <li><i class="fas fa-seedling icon"></i> <strong>Penyuluhan Pertanian:</strong> Memberikan informasi dan pelatihan kepada petani tentang teknik pertanian modern, penggunaan pupuk, pengelolaan lahan, serta pengembangan tanaman pangan unggul untuk meningkatkan hasil pertanian.</li>
    <li><i class="fas fa-heartbeat icon"></i> <strong>Penyuluhan Kesehatan:</strong> Edukasi masyarakat mengenai pola hidup sehat, pencegahan penyakit, kebersihan lingkungan, serta program imunisasi dan kesehatan ibu serta anak.</li>
    <li><i class="fas fa-baby icon"></i> <strong>Penyuluhan Keluarga Berencana (KB):</strong> Memberikan informasi tentang kesehatan reproduksi dan manfaat program keluarga berencana untuk kesejahteraan keluarga dan masyarakat secara keseluruhan.</li>
    <li><i class="fas fa-balance-scale icon"></i> <strong>Penyuluhan Hukum:</strong> Membantu masyarakat memahami hak dan kewajiban hukum, serta memberikan edukasi terkait peraturan daerah dan nasional yang berlaku.</li>
    <li><i class="fas fa-users icon"></i> <strong>Penyuluhan Sosial:</strong> Memberikan pembinaan dan informasi kepada masyarakat terkait program-program sosial, pemberdayaan masyarakat, serta bantuan sosial bagi kelompok rentan.</li>
</ul>

@endsection
