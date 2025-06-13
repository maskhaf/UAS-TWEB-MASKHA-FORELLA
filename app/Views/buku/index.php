<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="page-header">
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="page-header-title">
          <h5 class="m-b-10">Kelola Buku</h5>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Buku</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Data Buku</h5>
        <a href="<?= site_url('buku/create') ?>" class="btn btn-sm btn-primary">Tambah Buku</a>
      </div>
      <div class="card-body">
        <div class="table-responsive">

          <?php if (session()->getFlashdata('success')): ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <?= session()->getFlashdata('success') ?>
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif; ?>

          <table class="table table-hover table-bordered mb-0">
            <thead class="table-light">
              <tr>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Stok</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($buku as $row): ?>
              <tr>
                <td><?= esc($row['judul']) ?></td>
                <td><?= esc($row['penulis']) ?></td>
                <td><?= esc($row['penerbit']) ?></td>
                <td><?= esc($row['stok']) ?></td>
                <td>
                  <a href="<?= site_url('buku/edit/' . $row['id']) ?>" class="btn btn-sm btn-warning" class="ti ti-edit">Edit</a>
                  <a href="<?= site_url('buku/delete/' . $row['id']) ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus buku ini?')">Hapus</a>
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
