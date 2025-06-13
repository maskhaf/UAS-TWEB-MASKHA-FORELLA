<html>
<head>
  <meta charset="utf-8">
  <title>Laporan Peminjaman</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      font-size: 12px;
      color: #333;
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 10px;
    }
    th {
      background-color: #0d6efd;
      color: white;
      padding: 8px;
      border: 1px solid #ccc;
    }
    td {
      border: 1px solid #ccc;
      padding: 6px;
    }
    tr:nth-child(even) {
      background-color: #f9f9f9;
    }
    .footer {
      text-align: right;
      font-size: 10px;
      margin-top: 30px;
    }
  </style>
</head>
<body>
  <h2>LAPORAN PEMINJAMAN BUKU</h2>
  <table>
    <thead>
      <tr>
        <th>Nama Anggota</th>
        <th>Judul Buku</th>
        <th>Tgl Pinjam</th>
        <th>Tgl Kembali</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($peminjaman as $row): ?>
      <tr>
        <td><?= $row['anggota_nama'] ?></td>
        <td><?= $row['judul_buku'] ?></td>
        <td><?= $row['tgl_pinjam'] ?></td>
        <td><?= $row['tgl_kembali'] ?></td>
        <td><?= ucfirst($row['status']) ?></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
  <div class="footer">
    Dicetak pada: <?= date('d-m-Y H:i') ?>
  </div>
</body>
</html>
