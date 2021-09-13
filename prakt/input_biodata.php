<?php  
	session_start();
	if(!isset($_SESSION['username'])){
		echo "<script>alert('Login Dulu'); window.location = 'login.php';</script>";
	}
	$us = $_SESSION['username'];
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<fieldset>
		<legend>INPUT BIODATA</legend> <!-- biar ada ditengah2 sana -->
		<?php
			echo "Login sebagai $us";
		?>
		<center>
		<form method="POST">
			<table border="1">
				<tr>
					<td>NIM</td>
					<td><input type="text" name="nim"></td>
				</tr>
				<tr>
					<td>Nama</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td><textarea name="alamat"></textarea></td>
				</tr>				
			</table>
			<center>
				<input type="submit" name="kirim" value="Kirim">
				<a href="tampilan_data.php"> Output </a> &nbsp; &nbsp; &nbsp;
				<a href="logout.php"> Logout </a>
			</center>
		</form>
	</center>
	</fieldset>
</body>
</html>

<?php
	include 'koneksi.php';
	if(isset($_POST['kirim'])){
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];

		if((!empty($nim)) && (!empty($nama)) && (!empty($alamat))){ //kalo ada isinya...
			$query = "INSERT INTO biodata VALUES('','$nim','$nama','$alamat')";
			$simpan = mysqli_query($koneksi,$query);

			if ($simpan) { 
				echo "<script>alert('Data Berhasil Dimasukkan!'); window.location = 'tampilan_data.php';</script>";
			}
			else{
				echo "<script>alert('Data Gagal Dimasukkan!'); window.location = 'input_biodata.php';</script>";
			}
		}
		else{
			echo "<script>alert('Data Ada Yang Kosong'); window.location = 'input_biodata.php';</script>";
		}
	}
?>