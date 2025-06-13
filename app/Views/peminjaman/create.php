<?php /* /app/Views/peminjaman/create.php */ ?>
<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="page-header">
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="page-header-title">
          <h5 class="m-b-10">Form Tambah Peminjaman</h5>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= site_url('peminjaman') ?>">Peminjaman</a></li>
          <li class="breadcrumb-item">Tambah</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-8 mx-auto">
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0"><?= $title ?></h5>
      </div>
      <div class="card-body">
        <?php if (session()->getFlashdata('error')): ?>
          <div class="alert alert-danger"> <?= session()->getFlashdata('error') ?> </div>
        <?php endif; ?>

        <form method="post" action="<?= site_url('peminjaman/create') ?>">
          <div class="mb-3">
            <label class="form-label">Anggota</label>
            <select name="anggota_id" class="form-select" required>
              <?php foreach ($anggota as $a): ?>
                <option value="<?= $a['id'] ?>"><?= $a['nama'] ?></option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Buku</label>
            <select name="buku_id" class="form-select" required>
              <?php foreach ($buku as $b): ?>
                <option value="<?= $b['id'] ?>"><?= $b['judul'] ?> (Stok: <?= $b['stok'] ?>)</option>
              <?php endforeach; ?>
            </select>
          </div>

          <div class="mb-3">
            <label class="form-label">Tanggal Pinjam</label>
            <input type="date" name="tgl_pinjam" class="form-control" required>
          </div>

          <div class="mb-3">
            <label class="form-label">Tanggal Kembali</label>
            <input type="date" name="tgl_kembali" class="form-control">
          </div>

          <input type="hidden" name="status" value="dipinjam">

          <div class="d-flex justify-content-between">
            <a href="<?= site_url('peminjaman') ?>" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-success">Simpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>
