<?= $this->extend('layout/main') ?>
<?= $this->section('content') ?>

<div class="page-header">
  <div class="page-block">
    <div class="row align-items-center">
      <div class="col-md-12">
        <div class="page-header-title">
          <h5 class="m-b-10">Form Edit Buku</h5>
        </div>
        <ul class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= site_url('buku') ?>">Buku</a></li>
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
        <h5 class="mb-0">Edit Buku</h5>
      </div>
      <div class="card-body">
        <form action="<?= site_url('buku/update/' . $buku['id']) ?>" method="post">
          <div class="mb-3">
            <label class="form-label">Judul Buku</label>
            <input type="text" name="judul" class="form-control" value="<?= esc($buku['judul']) ?>" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Penulis</label>
            <input type="text" name="penulis" class="form-control" value="<?= esc($buku['penulis']) ?>" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Penerbit</label>
            <input type="text" name="penerbit" class="form-control" value="<?= esc($buku['penerbit']) ?>" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Stok</label>
            <input type="number" name="stok" class="form-control" value="<?= esc($buku['stok']) ?>" required>
          </div>
          <div class="d-flex justify-content-between">
            <a href="<?= site_url('buku') ?>" class="btn btn-secondary">Batal</a>
            <button type="submit" class="btn btn-success">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<?= $this->endSection() ?>