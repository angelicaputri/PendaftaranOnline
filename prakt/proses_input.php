<?php
include 'koneksi.php'

$kode_cd = $_POST['kode_cd'];
$umur = $_POST['umur'];
$judul = $_POST['judul'];
$jml_keping = $_POST['jml_keping'];

$query = mysqli_query($koneksi,"INSERT INTO cd VALUES('$kode_cd','$umur','$judul','$jml_keping')");

window.location = 'beranda.php';

?>