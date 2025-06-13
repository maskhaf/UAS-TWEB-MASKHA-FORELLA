<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= esc($title ?? 'Sistem Perpustakaan') ?></title>
  <link rel="icon" href="<?= base_url('aset/assets/images/favicon.svg') ?>" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" href="<?= base_url('aset/assets/fonts/tabler-icons.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('aset/assets/css/style.css') ?>">
  <link rel="stylesheet" href="<?= base_url('aset/assets/css/style-preset.css') ?>">
  <style>
    html {
      scroll-behavior: smooth;
    }
    body.landing-page {
      background: #f8f9fa !important;
    }
    .navbar {
      transition: top 0.3s;
    }
  </style>
</head>
<body class="landing-page">
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>

  <header id="home">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm" id="mainNav">
      <div class="container">
        <a class="navbar-brand fw-bold text-primary" href="<?= base_url() ?>">
           <img src="<?= base_url('aset/assets/images/logo-icon.svg') ?>" alt="logo" class="m-b-0"> <strong>Perpus APP</strong>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarGuest" aria-controls="navbarGuest" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarGuest">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#katalog">Katalog</a></li>
            <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
            <li class="nav-item"><a class="nav-link" href="<?= site_url('login') ?>">Login</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <?= $this->renderSection('content') ?>

  <footer class="py-4 bg-dark text-white mt-5" id="kontak">
    <div class="container text-center">
      <p class="mb-1">&copy; <?= date('Y') ?> Sistem Informasi Perpustakaan</p>
      <small>Dibuat sepenuh <i class="ti ti-heart text-danger"></i> oleh Maskha Forella</small>
    </div>
  </footer>

  <script src="<?= base_url('aset/assets/js/plugins/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('aset/assets/js/plugins/feather.min.js') ?>"></script>
  <script src="<?= base_url('aset/assets/js/pcoded.js') ?>"></script>

  <script>
    let prevScrollpos = window.pageYOffset;
    const nav = document.getElementById("mainNav");
    window.onscroll = function () {
      let currentScrollPos = window.pageYOffset;
      if (prevScrollpos > currentScrollPos) {
        nav.style.top = "0";
      } else {
        nav.style.top = "-80px";
      }
      prevScrollpos = currentScrollPos;
    }
  </script>
</body>
</html>
