<!DOCTYPE html>
<html>
<head>
	<title>Halaman Login</title>
</head>
<body>
	<center>
	<H2>HALAMAN LOGIN</H2>
		<form action="proses_login.php" method="post">
			<table>
				<tr>
					<td>Username</td>
					<td>:</td>
					<td><input type="text" name="username"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td>:</td>
					<td><input type="password" name="password"></td>
				</tr>
				<tr>
					<td colspan="3">
						<input type="submit" name="Kirim" value="Kirim">
					</td>
				</tr>
			</table>
		</form>
	<h4>Belum mempunyai akun? Silahkan daftarkan akun anda!</h4>
	<a href="signup.php"> + Sign Up </a>
	</center>
</body>
</html>