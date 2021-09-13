<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('style.css'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Selamat Datang Di Web Penerimaan Siswa SMP</title>
</head>
<body>
	<header>
		<div class=jumbotron>
			<br><br>
			<h3 class="text-center">Harap datang ke SMP N 6 <br>
				Pada Gedung GatotKaca <br>
				Ruang Alucard <br>
				Kursi ke- <?= $login['user_id']?></h3>
		</div>
	</header>
	<br><br>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url('UserController/udahLogin')?>">Daftar Online</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<a class="nav-link  dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="#" >
							<span class="glyphicon glyphicon-user"></span>
							<?= $login['usernameU']?>
							<span class="caret"></span>
						</a>
						<div class="dropdown-menu">
							<a  class="dropdown-item" href="<?= base_url('UserController/logout')?>">Log Out</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="container my-7">
		<div class="row">
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header bg-dark"">
						<a class="text-white" href="<?= base_url('UserController/bayar')?>"><h3>Input Bukti Pembayaran</h3></a>
					</div>
					<div class="card-body">
						<p>Jika anda telah melakukan pembayaran, upload bukti bayar disini.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header bg-dark"">
						<a class="text-white" href="<?= base_url('welcome/edit')?>"><h3>Edit Data Pendaftaran</h3></a>
					</div>
					<div class="card-body">
						<p>Pengeditan data pendaftaran Calon siswa Baru dapat dilakukan di halaman ini.</p>
						<p>Isilah data dengan benar dan salah, terserah kalian aja.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header bg-dark">
						<a class="text-white" href="<?= base_url('UserController/hasilAkhirBanget')?>"><h3>Hasil Akhir</h3></a>  
					</div>
					<div class="card-body">
						<p>Hasil akhir berupa nilai dan pengumuman kelulusan akan diberikan di halaman ini.</p>
						<p>Pengumuman akan dipublikasikan pada hari Kamis, 21 November 2019.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br><br>

	<footer class="py-5 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; SMP Giraf 2019</p>
		</div>
		<!-- /.container -->
	</footer>
</div>
</body>
</html>