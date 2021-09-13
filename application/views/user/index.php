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
		<div class=malasngoding-slider>
			<div class=isi-slider>
				<img src="<?php echo base_url('gambar1.jpg'); ?>" alt="Gambar 1">
				<img src="<?php echo base_url('gambar2.jpg'); ?>" alt="Gambar 2">
				<img src="<?php echo base_url('gambar3.jpg'); ?>" alt="Gambar 3">
				<img src="<?php echo base_url('gambar4.jpeg'); ?>" alt="Gambar 4">
				<img src="<?php echo base_url('gambar5.jpg'); ?>" alt="Gambar 5">
				<img src="<?php echo base_url('gambar6.jpg'); ?>" alt="Gambar 6">
				<img src="<?php echo base_url('gambar7.jpg'); ?>" alt="Gambar 7">
			</div>
		</div>
	</header>
	<br><br>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url();?>">Daftar Online</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('auth')?>"> Login </a> 
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
						<a class="text-white" href="<?= base_url('UserController/show')?>"><h3>List Pendaftar</h3></a>
					</div>
					<div class="card-body">
						<p>Berikut nama list pendaftar yang telah mendaftar.</p>
						<p>Nama, Asal Sekolah, NEM dapat menjadi acuan anda.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header bg-dark"">
						<a class="text-white" href="<?= base_url('welcome/daftar')?>"><h3>Pendaftaran</h3></a>
					</div>
					<div class="card-body">
						<p>Pendaftaran Calon Mahasiswa Baru dapat dilakukan di halaman ini.</p>
						<p>Isilah data dengan benar dan salah, terserah kalian aja.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
					<div class="card-header bg-dark">
						<a class="text-white" href="<?= base_url('welcome/sekolah')?>"><h3>Tentang Sekolah</h3></a>  
					</div>
					<div class="card-body">
						<p>SMP Giraf didirikan pada tanggal 20 November 2019</p>
						<p>Menjadikan sekolah paling bergengsi dengan anak yang gengsinya tinggi</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br><br><br>

	<footer class="py-2 bg-dark fixed-bottom">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; SMP Giraf 2019</p>
		</div>
		<!-- /.container -->
	</footer>
</div>
</body>
</html>