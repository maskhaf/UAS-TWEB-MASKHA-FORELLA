<?php /* /app/Views/peminjaman/index.php */ ?>
<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="page-header">
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="page-header-title">
          <h5 class="m-b-10">Peminjaman</h5>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Peminjaman</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Data Peminjaman</h5>
        <a href="<?= site_url('peminjaman/create') ?>" class="btn btn-sm btn-primary">Tambah Peminjaman</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">

        <?php if (session()->getFlashdata('success')): ?>
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('error') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif; ?>

          <table class="table table-hover table-bordered mb-0">
            <thead class="table-light">
              <tr>
                <th>Nama Anggota</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Status</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($peminjaman as $row): ?>
              <tr>
                <td><?= esc($row['anggota_nama']) ?></td>
                <td><?= esc($row['judul_buku']) ?></td>
                <td><?= esc($row['tgl_pinjam']) ?></td>
                <td><?= esc($row['tgl_kembali']) ?></td>
                <td>
                  <span class="badge bg-<?= $row['status'] === 'dipinjam' ? 'warning' : 'success' ?>">
                    <?= esc($row['status']) ?>
                  </span>
                </td>
                <td>
                  <?php if ($row['status'] === 'dipinjam'): ?>
                    <a href="<?= site_url('peminjaman/kembali/' . $row['id']) ?>" class="btn btn-sm btn-success">Kembalikan</a>
                  <?php else: ?>
                    <span class="text-muted">Selesai</span>
                  <?php endif; ?>
                </td>
              </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
