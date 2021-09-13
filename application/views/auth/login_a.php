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
    <title>Login</title>
</head>
<body>
    <?= $this->session->flashdata('message')?>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url();?>">Login Pendaftar</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url();?>">Beranda</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<br><br><br>
<div class="container">
    <div class="card">
        <div class="card-header bg-dark">
            <h2 class="text-white">Log In</h2>
        </div>
        <div class="card-body">
            <form class="form-horizontal" action="<?= base_url('UserController/login')?>" method="post">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Token</span>
                        </div>
                        <input type="text" class="form-control" name="usernameU" id="" placeholder="Token Yang Telah Diberikan"><br>
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">Password</span>
                        </div>
                        <input type="password" class="form-control" name="passwordU" id="" placeholder="Password Yang Telah Diberikan"><br>
                    </div>
                </div>
                <div class="form-group">
                    <input class="btn btn-dark" type="submit" value="Login">
                </div>
            </form>
        </div>
        <div class="card-footer text-center">
            <p>Anda admin? <a href="<?= base_url('auth/loginAdmin')?>">Klik Disini Untuk Login Admin</a></p>
        </div>
    </div>
</div>
<footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; SMP Giraf 2019</p>
            </div>
            <!-- /.container -->
        </footer>
</body>
</html>