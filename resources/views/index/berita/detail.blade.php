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

<!-- Detail Artikel-->
<section id="detail">
    <div class="container col-xxl-8 d-flex justify-content-center">   
        <div class="card bg-white col-xxl-8 text-left border-0">
            <p class="">
                <a href="/" class="text-decoration-none text-dark"> Beranda</a> / <a href="/berita/berita" class="text-decoration-none text-dark"> Berita</a> / Berita Prabowo Subianto Terkini Dan Terbaru Hari Ini
            </p>
            <h3 class="fw-bold mb-3">Berita Prabowo Subianto Terkini Dan Terbaru Hari Ini</h3>
            <p class="mb-3">Indonesia / 22 Oktober 2024</p>
            <img src="{{ asset('images/blog-1.jpg') }}" class="img-fluid rounded-3 mb-3 col-xl-8" alt="" >

<!--isi element-->
<!--isi element-->
<div class="ck-content rich-html-text" style="padding: 20px; line-height: 1.6;">
  <p style="color: #101820;">Hi, Gojekers!</p>

  <p style="color: #101820;">
    GoSend mau bagi-bagi promo nih! GoSend akan kasih kamu diskon yang bisa kamu pakai 
    untuk coba kirim pakai GoSend!
  </p>

  <p style="color: #101820;">
    Potongan ini bisa langsung kamu gunakan mulai dari tanggal 1 Oktober 2024 dengan 
    kode promo: <strong>COBAINGOSEND</strong> (khusus pengguna baru)
  </p>

  <h3 style="color: #101820;"><strong>Syarat dan Ketentuan:</strong></h3>
  <p style="color: #101820;"><strong>Periode Promo: 1 Oktober s.d. 30 Desember 2024</strong></p>

  <ul>
    <li style="color: #101820;">
      Masukkan kode voucher <strong>COBAINGOSEND</strong> di aplikasi Gojekmu untuk
      mendapatkan potongan harga s.d. 90% (maksimal 12rb) dari GoSend.
    </li>
    <li style="color: #101820;">Promo berlaku hanya untuk pengguna baru GoSend.</li>
    <li style="color: #101820;">Voucher hanya bisa di-redeem 1 kali.</li>
    <li style="color: #101820;">Voucher berlaku hingga 7 hari setelah di-redeem.</li>
    <li style="color: #101820;">Diskon berlaku di seluruh area layanan GoSend.</li>
    <li style="color: #101820;">
      Berlaku untuk GoSend Instan dengan motor atau mobil.
    </li>
    <li style="color: #101820;">
      Pembayaran bisa menggunakan tunai, GoPay, atau GoPayLater.
    </li>
    <li style="color: #101820;">Jumlah voucher terbatas.</li>
    <li style="color: #101820;">
      Gojek berhak memodifikasi atau menghentikan program ini kapan saja.
    </li>
  </ul>

  <p style="text-align: justify; color: #333333;">
    <strong>Cara Pemakaian Voucher GoSend</strong>
  </p>

  <p style="text-align: justify; color: #333333;">
    <strong>Melalui Halaman Promo Gojek</strong>
  </p>
  <ol style="text-align: justify; color: #333333;">
    <li>Buka halaman 'Promo' di aplikasi Gojek.</li>
    <li>Pilih ‘Voucher’, lalu pilih ‘GoSend’.</li>
    <li>
      Dapatkan voucher Flat Ongkir GoSend dan klik ‘Gunakan’ untuk melanjutkan pesanan.
    </li>
  </ol>

  <p style="text-align: justify; color: #333333;">
    <strong>Melalui Halaman GoSend</strong>
  </p>
  <ol style="text-align: justify; color: #333333;">
    <li>Buka aplikasi Gojek dan masuk ke halaman GoSend.</li>
    <li>
      Klik <i>banner</i> promo bertanda “COBAINGOSEND” di bagian atas halaman GoSend.
    </li>
    <li>Kamu akan diarahkan ke halaman pengisian kode promo.</li>
    <li>Masukkan kode promo ‘COBAINGOSEND’.</li>
    <li>Tekan 'Validasi Kodemu'.</li>
    <li>
      Cek voucher di halaman 'My Voucher' dan gunakan voucher Flat Ongkir GoSend.
    </li>
  </ol>

  <p style="text-align: justify; color: #333333;">
    Jadi, tunggu apalagi? Kirim apapun, Bestnya GoSend aja! Cepat, Aman, Hemat!
  </p>
</div>
<!--end isi element-->

<!--end elemen-->

        </div>
    </div>

</section>
<!-- end Detail Artikel-->  


@endsection