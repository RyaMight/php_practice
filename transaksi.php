<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Transaksi</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="halaman-data">
  <div class="konten-bpt">
    <h2>Data Transaksi</h2>
    <a href="transaksi-input.php" class="btn-tambah">Tambah Transaksi</a>
    <table class="tabel-bpt">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Barang</th>
          <th>Harga</th>
          <th>Qty</th>
          <th>Total</th>
          <th>Pegawai</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        $data = mysqli_query($koneksi, "
          SELECT t.*, b.nama AS nama_barang, p.nama AS nama_pegawai
          FROM transaksi t
          LEFT JOIN barang b ON t.id_barang = b.id_barang
          LEFT JOIN pegawai p ON t.nip = p.nip
          ORDER BY t.id_transaksi");
        while ($tampil = mysqli_fetch_array($data)) {
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo ($tampil['nama_barang']); ?></td>
            <td>Rp <?php echo ($tampil['harga']); ?></td>
            <td><?php echo $tampil['quantity']; ?></td>
            <td>Rp <?php echo ($tampil['harga_total']); ?></td>
            <td><?php echo ($tampil['nama_pegawai']); ?></td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
