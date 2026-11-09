<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Tambah Transaksi</title>
  <link rel="stylesheet" href="style.css">
</head>
<body class="halaman-form">
  <div class="kartu-form">
    <h2>Tambah Transaksi</h2>
    <form action="transaksi_aksi.php" method="POST">
      <table>
        <tr>
          <td>ID Barang</td>
          <td><input type="text" name="id_barang" required></td>
        </tr>
        <tr>
          <td>Harga</td>
          <td><input type="text" name="harga" required></td>
        </tr>
        <tr>
          <td>Quantity</td>
          <td><input type="text" name="quantity" required></td>
        </tr>
        <tr>
          <td>Harga Total</td>
          <td><input type="text" name="harga_total" required></td>
        </tr>
        <tr>
          <td>NIP</td>
          <td><input type="text" name="nip" required></td>
        </tr>
        <tr>
          <td colspan="2"><input type="submit" value="Simpan"></td>
        </tr>
      </table>
    </form>
    <a href="transaksi.php" class="btn-kembali">&larr; Kembali</a>
  </div>
</body>
</html>
