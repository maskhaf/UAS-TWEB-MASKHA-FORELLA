<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistem Perpustakaan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Sistem Perpustakaan menggunakan template Mantis Bootstrap 5">
  <meta name="keywords" content="Perpustakaan, Admin, Bootstrap, Mantis">
  <meta name="author" content="CodedThemes">

  <link rel="icon" href="<?php echo base_url()?>aset/assets/images/favicon.svg" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap" id="main-font-link">
  <link rel="stylesheet" href="<?php echo base_url()?>aset/assets/fonts/tabler-icons.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>aset/assets/fonts/feather.css">
  <link rel="stylesheet" href="<?php echo base_url()?>aset/assets/fonts/fontawesome.css">
  <link rel="stylesheet" href="<?php echo base_url()?>aset/assets/fonts/material.css">
  <link rel="stylesheet" href="<?php echo base_url()?>aset/assets/css/style.css" id="main-style-link">
  <link rel="stylesheet" href="<?php echo base_url()?>aset/assets/css/style-preset.css">
</head>

<body data-pc-preset="preset-1" data-pc-direction="ltr" data-pc-theme="light">
  <!-- Loader -->
  <div class="loader-bg">
    <div class="loader-track">
      <div class="loader-fill"></div>
    </div>
  </div>

  <!-- Sidebar -->
  <?= $this->include('partials/sidebar') ?>

  <!-- Header -->
  <?= $this->include('partials/header') ?>

  <!-- Main Content -->
  <div class="pc-container">
    <div class="pc-content">
      <?= $this->renderSection('content') ?>
    </div>
  </div>

  <!-- JS -->
  <script src="<?php echo base_url()?>aset/assets/js/plugins/apexcharts.min.js"></script>
  <script src="<?php echo base_url()?>aset/assets/js/pages/dashboard-default.js"></script>
  <script src="<?php echo base_url()?>aset/assets/js/plugins/popper.min.js"></script>
  <script src="<?php echo base_url()?>aset/assets/js/plugins/simplebar.min.js"></script>
  <script src="<?php echo base_url()?>aset/assets/js/plugins/bootstrap.min.js"></script>
  <script src="<?php echo base_url()?>aset/assets/js/fonts/custom-font.js"></script>
  <script src="<?php echo base_url()?>aset/assets/js/pcoded.js"></script>
  <script src="<?php echo base_url()?>aset/assets/js/plugins/feather.min.js"></script>

  <script>layout_change('light');</script>
  <script>change_box_container('false');</script>
  <script>layout_rtl_change('false');</script>
  <script>preset_change("preset-1");</script>
  <script>font_change("Public-Sans");</script>
</body>
</html>
