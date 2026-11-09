<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Pegawai</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="halaman-form">
<?php
include "koneksi.php";
$nip = $_GET['nip'];
$data = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE nip='$nip'");
$tampil = mysqli_fetch_array($data);
?>
  <div class="kartu-form">
    <h2>Edit Pegawai</h2>
    <form action="pegawai-edit-aksi.php" method="POST">
      <table>
        <tr>
          <td>NIP</td>
          <td><input type="text" name="nip" value="<?php echo $tampil['nip']; ?>" readonly></td>
        </tr>
        <tr>
          <td>Nama Pegawai</td>
          <td><input type="text" name="nama_pegawai" value="<?php echo $tampil['nama']; ?>" required></td>
        </tr>
        <tr>
          <td>Username</td>
          <td><input type="text" name="username" value="<?php echo $tampil['username']; ?>" required></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="text" name="password" value="<?php echo $tampil['password']; ?>" required></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" value="Simpan"></td>
        </tr>
      </table>
    </form>
    <a href="pegawai.php" class="btn-kembali">&larr; Kembali</a>
  </div>
</body>
</html>
