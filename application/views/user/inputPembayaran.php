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
  <script type="text/javascript" language="javascript" src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  <script type="text/javascript" language="javascript" src="//cdn.datatables.net/1.10.4/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" language="javascript" src="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.js"></script>
  <link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/plug-ins/9dcbecd42ad/integration/bootstrap/3/dataTables.bootstrap.css">
  <title>List Pendaftaran</title>
</head>
<body>
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url('UserController/udahLogin').$login['usernameU']?>">Daftar Online</a>
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
  <br> <br> <br>

  <div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-10">
      <h1>UNGGAH BUKTI PEMBAYARAN PENDAFTARAN</h1>
      <div><?= validation_errors() ?></div>
      <?= form_open_multipart('UserController/editBukti', ['class'=>'form-horizontal','was-validated']) ?>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-4 control-label"></label>
        <div class="col-sm-10">
          <input type="file" class="form-control" name="bukti" >
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Save</button>
        </div>
      </div>
      <?= form_close() ?>
    </div>
    <div class="col-md-1"></div>
  </div>

<!--   <script>
    $(document).ready(function(){
      $('#myTable').DataTable();
    });
  </script> -->

<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; SMP Giraf 2019</p>
  </div>
  <!-- /.container -->
</footer>
</body>
</html>