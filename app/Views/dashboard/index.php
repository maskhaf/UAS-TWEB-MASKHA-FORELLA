<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="page-header">
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="page-header-title">
          <h5 class="m-b-10">Dashboard</h5>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item">Dashboard</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <h6 class="mb-2 f-w-400 text-muted">Total Buku</h6>
        <h4 class="mb-3"><?= $buku ?? 0 ?> <span class="badge bg-light-primary border border-primary"><i class="ti ti-book"></i></span></h4>
        <p class="mb-0 text-muted text-sm">Jumlah buku tersedia di perpustakaan</p>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <h6 class="mb-2 f-w-400 text-muted">Total Anggota</h6>
        <h4 class="mb-3"><?= $anggota ?? 0 ?> <span class="badge bg-light-success border border-success"><i class="ti ti-users"></i></span></h4>
        <p class="mb-0 text-muted text-sm">Anggota terdaftar aktif</p>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <h6 class="mb-2 f-w-400 text-muted">Peminjaman Aktif</h6>
        <h4 class="mb-3"><?= $pinjam ?? 0 ?> <span class="badge bg-light-warning border border-warning"><i class="ti ti-folder"></i></span></h4>
        <p class="mb-0 text-muted text-sm">Masih dalam status dipinjam</p>
      </div>
    </div>
  </div>

  <div class="col-md-6 col-xl-3">
    <div class="card">
      <div class="card-body">
        <h6 class="mb-2 f-w-400 text-muted">Peminjaman Selesai</h6>
        <h4 class="mb-3"><?= $kembali ?? 0 ?> <span class="badge bg-light-danger border border-danger"><i class="ti ti-check"></i></span></h4>
        <p class="mb-0 text-muted text-sm">Total buku dikembalikan</p>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
