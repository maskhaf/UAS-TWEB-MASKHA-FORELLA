<?php /* /app/Views/auth/login.php */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login - Sistem Perpustakaan</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap">
  <link rel="stylesheet" href="<?= base_url('aset/assets/css/style.css') ?>">
  <link rel="stylesheet" href="<?= base_url('aset/assets/css/style-preset.css') ?>">
  <link rel="icon" href="<?= base_url('aset/assets/images/favicon.svg') ?>" type="image/x-icon">
  <style>
    body {
      background-color: #f8f9fa;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      font-family: 'Public Sans', sans-serif;
    }
    .login-wrapper {
      width: 100%;
      max-width: 420px;
      background: #fff;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0,0,0,0.05);
      opacity: 0;
      transform: translateY(20px);
      animation: fadeSlideIn 0.5s ease-out forwards;
    }
    .login-wrapper .logo {
      display: flex;
      justify-content: center;
      margin-bottom: 20px;
    }
    .login-wrapper .logo img {
      height: 50px;
    }
    @keyframes fadeSlideIn {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
  </style>
</head>
<body>
  <div class="login-wrapper">
    <div class="logo">
      <img src="<?= base_url('aset/assets/images/logo-icon.svg') ?>" alt="logo" class="m-b-0">
    </div>
    <h4 class="text-center mb-4">Login</h4>

    <?php if (session()->getFlashdata('error')): ?>
      <div class="alert alert-danger"> <?= session()->getFlashdata('error') ?> </div>
    <?php endif; ?>

    <form method="post" action="<?= site_url('login') ?>">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" name="username" required placeholder="Username">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" required placeholder="Password">
      </div>
      <div class="d-grid gap-2">
        <button type="submit" class="btn btn-primary">Login</button>
        <a href="<?= base_url() ?>" class="btn btn-outline-secondary">Kembali ke Beranda</a>
      </div>
    </form>
  </div>

  <script src="<?= base_url('aset/assets/js/plugins/bootstrap.min.js') ?>"></script>
</body>
</html>
