<?php /* /app/Views/home/index.php */ ?>
<?= $this->extend('layout/guest') ?>
<?= $this->section('content') ?>

<style>
  .scroll-top {
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease-in-out;
  }
  .scroll-top.show {
    opacity: 1;
    visibility: visible;
  }
  .card {
    transition: transform 0.3s ease;
  }
  .card:hover {
    transform: translateY(-5px);
  }
</style>

<section class="py-5 text-white bg-primary position-relative overflow-hidden" id="home">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-6">
        <h1 class="display-5 fw-bold text-white">Sistem Informasi Perpustakaan</h1>
        <p class="lead">Melayani peminjaman, pengelolaan buku dan anggota secara digital.</p>
        <a href="<?= site_url('login') ?>" class="btn btn-light btn-lg mt-3">Login Sekarang</a>
      </div>
    </div>
  </div>
</section>

<section class="py-5">
  <div class="container">
    <div class="row text-center">
      <div class="col-md-4 mb-4" data-aos="fade-up">
        <div class="card h-100">
          <div class="card-body">
            <i class="ti ti-book fs-1 text-primary"></i>
            <h5 class="mt-3">Katalog Buku</h5>
            <p>Mengelola data buku lengkap dengan informasi stok dan penerbit.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
        <div class="card h-100">
          <div class="card-body">
            <i class="ti ti-users fs-1 text-primary"></i>
            <h5 class="mt-3">Data Anggota</h5>
            <p>Mencatat data siswa atau anggota yang terdaftar sebagai peminjam.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
        <div class="card h-100">
          <div class="card-body">
            <i class="ti ti-folder fs-1 text-primary"></i>
            <h5 class="mt-3">Transaksi Peminjaman</h5>
            <p>Manajemen peminjaman dan pengembalian buku dengan riwayat yang lengkap.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="py-5 bg-light" id="katalog">
  <div class="container">
    <h2 class="fw-bold text-center mb-4">Daftar Buku Tersedia</h2>
    <div class="table-responsive">
      <table class="table table-bordered table-hover align-middle">
        <thead class="table-primary">
          <tr>
            <th class="text-center">Judul</th>
            <th class="text-center">Penulis</th>
            <th class="text-center">Penerbit</th>
            <th class="text-center">Stok</th>
            <th class="text-center">Tahun Terbit</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($buku as $row): ?>
            <tr>
              <td><?= esc($row['judul']) ?></td>
              <td><?= esc($row['penulis']) ?></td>
              <td><?= esc($row['penerbit']) ?></td>
              <td class="text-center"><?= esc($row['stok']) ?></td>
              <td class="text-center"><?= esc($row['tahun']) ?></td> 
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="py-5" id="kontak">
  <div class="container">
    <h2 class="fw-bold text-center mb-4">Kontak</h2>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card shadow-sm">
          <div class="card-body">
            <p><i class="ti ti-map-pin"></i> Jl. G. Obos No.114, Menteng, Jekan Raya, Kota Palangka Raya, Kalimantan Tengah</p>
            <p><i class="ti ti-mail"></i> maskha.forella@gmail.com</p>
            <p><i class="ti ti-phone"></i> 0812-5438-9921</p>
            <div class="mt-4 text-center">
              <a href="https://web.facebook.com/profile.php?id=100008636657843&locale=id_ID" class="text-decoration-none me-3 text-primary"><i class="ti ti-brand-facebook fs-4"></i></a>
              <a href="https://www.instagram.com/maskhaforella" class="text-decoration-none me-3 text-danger"><i class="ti ti-brand-instagram fs-4"></i></a>
              <a href="https://www.youtube.com/@maskhaforella" class="text-decoration-none text-danger"><i class="ti ti-brand-youtube fs-4"></i></a>
            </div>
          </div>
        </div>
        <div class="ratio ratio-16x9">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1994.3024184164184!2d113.91003581802262!3d-2.2144742972427635!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dfcbfd2cb8e2c39%3A0x8839f8a27b6c7b2!2sSTMIK%20Palangkaraya!5e0!3m2!1sid!2sid!4v1718265011344!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<a href="#home" class="btn btn-primary scroll-top position-fixed bottom-0 end-0 m-4 rounded-circle shadow" style="z-index:1030; width:48px; height:48px; display:flex; align-items:center; justify-content:center">
  <i class="ti ti-arrow-up"></i>
</a>

<script>
  const scrollBtn = document.querySelector('.scroll-top');
  window.addEventListener('scroll', function () {
    if (window.scrollY > 300) {
      scrollBtn.classList.add('show');
    } else {
      scrollBtn.classList.remove('show');
    }
  });
</script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>AOS.init();</script>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<?= $this->endSection() ?>
