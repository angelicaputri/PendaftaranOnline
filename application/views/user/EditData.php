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
			<a class="navbar-brand" href="index.html">Hasil Akhir</a>
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
							<a  class="dropdown-item" href="<?= base_url('UserController/udahLogin')?>">Beranda</a>
							<a  class="dropdown-item" href="<?= base_url('UserController/logout')?>">Log Out</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<br> <br> <br>

	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<h1>Form Pendaftaran Siswa Baru SMP Nana na</h1>
			<p> Isilah form registrasi dibawah ini dengan <b>data yang lengkap dan benar.</b></p>
			
			<div><?= validation_errors() ?></div>
			<?= form_open_multipart('UserController/create', ['class'=>'form-horizontal']) ?>
			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Nama Lengkap</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="namaLengkap" placeholder="" value="<?= set_value('namaLengkap') ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">NIK</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="nik" placeholder="" value="<?= set_value('nik') ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Tempat Tanggal Lahir</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="ttl" placeholder="" value="<?= set_value('ttl') ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Umur</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="umur" placeholder="" value="<?= set_value('umur') ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Asal Sekolah</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="asalSekolah" placeholder="" value="<?= set_value('asalSekolah') ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="inputPassword3" class="col-sm-3 control-label">Alamat Asal (Lengkap)</label>
				<div class="col-sm-10">
					<textarea class="form-control" name="alamat" value="<?= set_value('alamat') ?>"></textarea>
				</div>
			</div>

			<div class="form-group">
				<p><b>Profil Orang Tua (Ayah) </b></p>
				<label for="inputEmail3" class="col-sm-2 control-label">Nama Ayah</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="namaBapak" placeholder="" value="<?= set_value('namaBapak') ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Pekerjaan Ayah</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="kerjaBapak" placeholder="" value="<?= set_value('kerjaBapak') ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Tempat Kerja Ayah</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="tempatBapak" placeholder="" value="<?= set_value('tempatBapak') ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Gaji Bapak</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="gajiBapak" placeholder="" value="<?= set_value('gajiBapak') ?>">
				</div>
			</div>

			<div class="form-group">
				<p><b>Profil Orang Tua (Ibu) </b></p>
				<label for="inputEmail3" class="col-sm-2 control-label">Nama Ibu</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="namaIbu" placeholder="" value="<?= set_value('namaIbu') ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Pekerjaan Ibu</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="kerjaIbu" placeholder="" value="<?= set_value('kerjaIbu') ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Tempat Kerja Ibu</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="tempatIbu" placeholder="" value="<?= set_value('tempatIbu') ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Gaji Ibu</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" name="gajiIbu" placeholder="" value="<?= set_value('gajiIbu') ?>">
				</div>
			</div>

			<div class="form-group">
				<label for="inputPassword3" class="col-sm-4 control-label">Unggah Foto Ijazah/Surat Keterangan Lulus</label>
				<div class="col-sm-10">
					<input type="file" class="form-control" name="ijazah" >
				</div>
			</div>

			<div class="form-group">
				<label for="inputPassword3" class="col-sm-4 control-label">Unggah Foto Kartu Keluarga</label>
				<div class="col-sm-10">
					<input type="file" class="form-control" name="kk" >
				</div>
			</div>

			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<button type="submit" class="btn btn-default">Ubah Data</button>
				</div>
			</div>
			<?= form_close() ?>
		</div>
		<div class="col-md-1"></div>
	</div>

	<footer class="py-5 bg-dark">
		<div class="container">
			<p class="m-0 text-center text-white">Copyright &copy; SMP Giraf 2019</p>
		</div>
	</footer>
</body>
</html>