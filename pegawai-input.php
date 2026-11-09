<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Pegawai</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="halaman-form">
  <div class="kartu-form">
    <h2>Tambah Pegawai</h2>
    <form action="pegawai-aksi.php" method="POST">
      <table>
        <tr>
          <td>NIP</td>
          <td><input type="text" name="nip" required></td>
        </tr>
        <tr>
          <td>Nama Pegawai</td>
          <td><input type="text" name="nama_pegawai" required></td>
        </tr>
        <tr>
          <td>Username</td>
          <td><input type="text" name="username" required></td>
        </tr>
        <tr>
          <td>Password</td>
          <td><input type="text" name="password" required></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" value="Simpan"></td>
        </tr>
      </table>
    </form>
    <a href="pegawai.php" class="btn-kembali">Kembali</a>
  </div>
</body>
</html>
