<?php include "koneksi.php"; ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Data Pegawai</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="halaman-data">
  <div class="konten-bpt">
    <h2>Data Pegawai</h2>
    <a href="pegawai-input.php" class="btn-tambah">Tambah Pegawai</a>
    <table class="tabel-bpt">
      <thead>
        <tr>
          <th>No</th>
          <th>NIP</th>
          <th>Nama Pegawai</th>
          <th>Username</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM pegawai ORDER BY id_pegawai");
        while ($tampil = mysqli_fetch_array($data)) {
          ?>
          <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo ($tampil['nip']); ?></td>
            <td><?php echo ($tampil['nama']); ?></td>
            <td><?php echo ($tampil['username']); ?></td>
            <td><a href="pegawai-edit.php?nip=<?php echo $tampil['nip']; ?>">Edit</a></td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>
