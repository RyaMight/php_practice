<?php
include "koneksi.php";
$id_barang = $_POST['id_barang'];
$harga = $_POST['harga'];
$quantity = $_POST['quantity'];
$harga_total = $_POST['harga_total'];
$nip = $_POST['nip'];

mysqli_query($koneksi, "INSERT INTO transaksi (id_barang, harga, quantity, harga_total, nip) VALUES ('$id_barang', '$harga', '$quantity', '$harga_total', '$nip');");

header("location:transaksi.php");
