<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<?php if (isset($validation)): ?>
  <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
<?php endif; ?>

<div class="page-header">
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="page-header-title">
          <h5 class="m-b-10">Form Edit Anggota</h5>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= site_url('anggota') ?>">Anggota</a></li>
          <li class="breadcrumb-item">Edit</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6 mx-auto">
    <div class="card">
      <div class="card-header">
        <h5 class="mb-0">Edit Anggota</h5>
      </div>
      <div class="card-body">
        <form action="<?= site_url('anggota/update/' . $anggota['id']) ?>" method="post">
          <div class="mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="nama" class="form-control" value="<?= esc($anggota['nama']) ?>" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Alamat</label>
            <textarea name="alamat" class="form-control" required><?= esc($anggota['alamat']) ?></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">No. HP</label>
            <input type="text" name="no_hp" class="form-control" value="<?= esc($anggota['no_hp']) ?>" required>
          </div>
          <div class="d-flex justify-content-between">
            <a href="<?= site_url('anggota') ?>" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>