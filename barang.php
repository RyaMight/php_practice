<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Barang</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="halaman-data">
  <div class="konten-bpt">
    <h2>Data Barang</h2>
    <a href="barang-input.php" class="btn-tambah">Tambah Barang</a>
    <table class="tabel-bpt">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nama Barang</th>
          <th>Harga</th>
          <th>Stok</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM barang ORDER BY id_barang");
        while ($tampil = mysqli_fetch_array($data)) {
          ?>
          <tr>
            <td><?php echo $tampil['id_barang']; ?></td>
            <td><?php echo ($tampil['nama']); ?></td>
            <td>Rp <?php echo ($tampil['harga']); ?></td>
            <td><?php echo $tampil['stok']; ?></td>
            <td><a href="barang-edit.php?id=<?php echo $tampil['id_barang'];?>">Edit</a></td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
