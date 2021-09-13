<?php

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$sql = mysqli_query($koneksi, "SELECT * FROM login WHERE username = '$username' AND password = '$password'");

$i = 1;
while ($data = mysqli_fetch_array($sql)) {
	$username = $data['username'];
	$password = $data['password'];
	$i++;
}

if (($username == "") || ($password == "")) {
	echo "<script>alert('Isi dulu guys!!!'); window.location = 'login.php';</script>";
}

if (($username == $username) && ($password == $password)) {
	session_start();
	$_SESSION['username'] = $username; //simpan var dalam server, kalo close dari browser, var gabakal ilang
	$_SESSION['password'] = $password;

	echo "<script>alert('Login Berhasil'); window.location = 'input_biodata.php';</script>";
}
else {
	echo "<script>alert('Gagal Login'); window.location = 'login.php';</script>";
}
?>