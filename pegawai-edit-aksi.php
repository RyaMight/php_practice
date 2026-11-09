<?php
include 'koneksi.php';
$nip = $_POST['nip'];
$nama_pegawai = $_POST['nama_pegawai'];
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($koneksi, "UPDATE pegawai SET nama='$nama_pegawai', username='$username', password='$password' WHERE nip='$nip'");
header("location:pegawai.php?pesan=update");
?>