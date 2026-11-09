<?php
include 'koneksi.php';
$nip = $_POST['nip'];
$nama_pegawai = $_POST['nama_pegawai'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($koneksi, "INSERT INTO pegawai (nip, nama, username, password) VALUES ('$nip', '$nama_pegawai', '$username', '$password');");

header("location:pegawai.php");
?>