<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title><?= esc($title ?? 'Login') ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?= base_url('aset/assets/images/favicon.svg') ?>" type="image/x-icon">
  <link rel="stylesheet" href="<?= base_url('aset/assets/css/style.css') ?>">
  <link rel="stylesheet" href="<?= base_url('aset/assets/css/style-preset.css') ?>">
</head>
<body>
  <div class="pc-container">
    <div class="pc-content">
      <?= $this->renderSection('content') ?>
    </div>
  </div>
  <script src="<?= base_url('aset/assets/js/plugins/bootstrap.min.js') ?>"></script>
</body>
</html>
