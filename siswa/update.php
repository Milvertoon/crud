<?php

include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nipd = $_POST['nipd'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

mysqli_query($koneksi, "update tb_siswa set nama='$nama', nipd='$nipd', kelas='$kelas',jurusan='$jurusan' where id='$id'");

header("location:tampil.php");

?>