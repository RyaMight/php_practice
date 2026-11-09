<?php
include 'koneksi.php';
$id_barang = $_POST['id_barang'];
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$stok = $_POST['stok'];

mysqli_query($koneksi, "INSERT INTO barang (id_barang, nama, harga, stok) VALUES ('$id_barang', '$nama_barang', '$harga', '$stok');");

header("location:barang.php");
?>
