<?php
include 'koneksi.php';

$no=$_GET['no'];
$sql = "DELETE FROM gallery WHERE no='$no'";
$hapus = mysqli_query($koneksi,$sql);

if ($hapus){
	echo "<script>alert('Data Berhasil Dihapus!'); window.location = 'beranda.php';</script>";
}
else{
	echo "<script>alert('Data Gagal Dihapus!'); window.location = 'beranda.php';</script>";
}  


?>