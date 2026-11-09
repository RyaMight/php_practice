<head>
</head>
<body>
    <div>
        <h1>Edit Data Barang</h1>
    </div>
    <br/>

    <a href="barang.php">Lihat Semua Data</a>
    <br/>

    <?php
        include "koneksi.php";
        $id_barang = $_GET['id'];
        $data = mysqli_query($koneksi, "SELECT * FROM barang WHERE id_barang='$id_barang'");
        $nomor = 1;
        $tampil = mysqli_fetch_array($data);
    ?>

    <form action="barang-edit-aksi.php" method="POST">
        <input type="hidden" name="id_barang" value="<?php echo $tampil['id_barang']; ?>">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama_barang" value="<?php echo $tampil['nama']; ?>"></td>
            </tr>
            <tr>
                <td>Harga</td>
                <td><input type="text" name="harga" value="<?php echo $tampil['harga']; ?>"></td>
            </tr>
            <tr>
                <td>Stok</td>
                <td><input type="text" name="stok" value="<?php echo $tampil['stok']; ?>"></td>
            </tr>
            <tr>
                <td><input type="submit" value="Simpan"></td>
            </tr>
        </table>
    </form>