<!DOCTYPE html>
<html>
<head>
	<title>Tampilan Data</title>
</head>
<body>
	<fieldset>
		<legend>DAFTAR DATA</legend>
		<center>

		<?php
			include 'koneksi.php';
			$query = "SELECT * FROM biodata";
			$tampil= mysqli_query($koneksi,$query);
		?>

			<table border="1">
				<th>No</th>
				<th>NIM</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>Aksi</th>

			<?php 
				$no=0;
				while ($hasil=mysqli_fetch_array($tampil)) {
					$no=$no+1;
					echo "<tr>
					<td>$no</td>
					<td>$hasil[nim]</td>
					<td>$hasil[nama]</td>
					<td>$hasil[alamat]</td>
					<td>
						<a href='prosesedit.php?no=$hasil[no]'>[Edit]</a> ||
						<a href='hapus.php?no=$hasil[no]' onclick='returnconfirm(\"Hapus data dari NIM $hasil[nim] \")'>[Hapus]</a>
					</td>
					</tr>";
				}
			?>			
			</table>
			<a href="input_biodata.php"> + Input Biodata </a> &nbsp; &nbsp; &nbsp; <!--spasi di html-->
			<a href="logout.php"> Logout </a>
		</center>
	</fieldset>
</body>
</html>