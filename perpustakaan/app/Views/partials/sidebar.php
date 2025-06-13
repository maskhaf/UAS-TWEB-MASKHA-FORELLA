<nav class="pc-sidebar">
  <div class="navbar-wrapper">
    <div class="m-header">
      <a href="<?= base_url('dashboard') ?>" class="b-brand text-primary">
        <img src="<?= base_url('aset/assets/images/logo-icon.svg') ?>" alt="logo" class="m-b-0"> <strong>Perpus APP</strong>
      </a>
    </div>
    <div class="navbar-content">
      <ul class="pc-navbar">
        <li class="pc-item">
          <a href="<?= base_url('dashboard') ?>" class="pc-link">
            <span class="pc-micon"><i class="ti ti-dashboard"></i></span>
            <span class="pc-mtext">Dashboard</span>
          </a>
        </li>
        <li class="pc-item pc-caption">
          <label>Fitur</label>
          <i class="ti ti-dashboard"></i>
        </li>
        <li class="pc-item">
          <a href="<?= base_url('buku') ?>" class="pc-link">
            <span class="pc-micon"><i class="ti ti-book"></i></span>
            <span class="pc-mtext">Kelola Buku</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="<?= base_url('anggota') ?>" class="pc-link">
            <span class="pc-micon"><i class="ti ti-users"></i></span>
            <span class="pc-mtext">Kelola Anggota</span>
          </a>
        </li>
        <li class="pc-item">
          <a href="<?= base_url('peminjaman') ?>" class="pc-link">
            <span class="pc-micon"><i class="ti ti-folder"></i></span>
            <span class="pc-mtext">Peminjaman</span>
          </a>
        </li>
        <li class="pc-item pc-caption">
          <label>Rekapitulasi</label>
          <i class="ti ti-dashboard"></i>
        </li>
        <li class="pc-item">
          <a href="<?= base_url('peminjaman/cetak') ?>" class="pc-link" target="_blank">
            <span class="pc-micon"><i class="ti ti-file"></i></span>
            <span class="pc-mtext">Cetak PDF</span>
          </a>
        </li>
    </div>
  </div>
</nav>