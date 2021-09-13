<!DOCTYPE html>
<html>
<head>
	<title>Form Edit</title>
</head>
<body>
	<h2>UBAH BIODATA</h2>
	<?php
		include 'koneksi.php';
		$no=$_GET['no'];
		$sql = "SELECT * FROM gallery WHERE no='$no'";
		$tampil = mysqli_query($koneksi,$sql);
		while($data=mysqli_fetch_array($tampil)){
	?>
	<form action="edit.php" method="POST">
		<table>
			<tr>
				<td>Caption</td>
				<td>:</td>
				<td>
					<input type="hidden" name="no" value="<?php echo $data['no'];?>">
					<input type="text" name="caption" value="<?php echo $data['caption'];?>">
				</td>
		</table>
	</form>

	<?php
		}
	?>
</body>
</html>