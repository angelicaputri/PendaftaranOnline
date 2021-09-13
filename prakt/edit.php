<?php
include 'koneksi.php';

$judul=$judul;
$jenis=$judul;
$sutradara=$sutradara;
$pemain_utama=$pemain_utama;
$harga=$harga;
$sekilas=$sekilas;
$thn_terbit=$thn_terbit;

$query = "UPDATE dvd SET judul='$judul',jenis='$jenis',nama_gmb='$nama_gmb',sutradara='$sutradara',pemain_utama='$pemain_utama',harga='$harga',sekilas='$sekilas',thn_terbit='$thn_terbit'";
$edit = mysqli_query($koneksi,$query);


if($edit){
	echo "<script>alert('Data Berhasil Diedit!'); window.location = 'kelola01.php';</script>";
}
else{
	echo "<script>alert('Data Gagal Diedit!'); window.location = 'kelola01.php';</script>";
}

?>