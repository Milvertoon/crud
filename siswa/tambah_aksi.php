<?php 

include 'koneksi.php';

$nama = $_POST['nama'];
$nipd = $_POST['nipd'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];

mysqli_query($koneksi, "insert into tb_siswa values('','$nama','$nipd','$kelas','$jurusan')");

header("location:tampil.php");

?>