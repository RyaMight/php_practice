<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Barang</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="halaman-form">
  <div class="kartu-form">
    <h2>Tambah Barang</h2>
    <form action="barang-input-aksi.php" method="POST">
      <table>
        <tr>
          <td>ID Barang</td>
          <td><input type="text" name="id_barang" required></td>
        </tr>
        <tr>
          <td>Nama Barang</td>
          <td><input type="text" name="nama_barang" required></td>
        </tr>
        <tr>
          <td>Harga</td>
          <td><input type="text" name="harga" required></td>
        </tr>
        <tr>
          <td>Stok</td>
          <td><input type="text" name="stok" required></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" value="Simpan"></td>
        </tr>
      </table>
    </form>
    <a href="barang.php" class="btn-kembali">&larr; Kembali</a>
  </div>
</body>
</html>
