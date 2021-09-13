<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<title>Halaman Pendaftaran</title>
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
		<div class="container">
			<a class="navbar-brand" href="<?= base_url();?>">Halaman Pendaftaran</a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url();?>">Beranda</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?= base_url('auth');?>">Login</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<br> <br> <br>

	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<p>Simpan Token dan Password dibawah!</p>
			<p><b>TOKEN DAN PASSWORD DIPAKAI UNTUK LOGIN! TIDAK DAPAT DIGANTI!</b></p>
				<h5>Token :  <b> <?= $user['usernameU'];?> </b></h5>
				<h5>Password : <b><?= $user['PasswordU'];?> </b></h5>
		</div>
		<div class="col-md-1"></div>
	</div>

	<footer class="py-5 bg-dark fixed-bottom">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; SMP Giraf 2019</p>
		</div>
	</footer>
</body>
</html>