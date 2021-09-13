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
    <title>Hasil Akhir</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Daftar Online</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li class="nav-item dropdown">
            <a class="nav-link  dropdown-toggle" id="navbardrop" data-toggle="dropdown" href="#" ><span class="glyphicon glyphicon-user"></span><?= $login['username']?><span class="caret"></span></a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="<?= base_url('admin/show/'. $login['username'])?>">Edit Profile</a>
                <a  class="dropdown-item" href="<?= base_url('auth/logout')?>">Log Out</a>
            </div>
        </li>
    </ul>
  </div>
</nav>
<br> <br> <br>
<div class="container">
<div class="card">
    <div class="card-header">
        <h2>Nilai Peserta</h2>
    </div>
    <div class="card-body">
        <div class="container">
        <table class="table table-hover table-dark table-striped">
            <thead>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>NIK</td>
                    <td>Nilai</td>
                    <td>Edit Nilai</td>
                    <td>Hasil</td>
                 </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                    <tr>
                        <td><?= $user['namaLengkap'] ?></td>
                        <td><?= $user['nik'] ?></td>
                        <td><?= $user['nilai'] ?></td>
                        <td>
                        <form action="<?= base_url('admin/editScore/').$user['user_id']?>" method="post">
                        <input type='text' name='nilai' placeholder='insert score'>
                        <input class="btn bg-light" type="submit" value="Submit">
                        </form></td>
                        <td><?= $user['hasil'] ?></td>
                   </tr>
                <?php endforeach ?>
            </tbody>
        </table>
        </div>
    </div>
</div>
</div>




<footer class="py-5 bg-dark fixed-bottom">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Lebah Ganteng 2019</p>
    </div>
    <!-- /.container -->
  </footer>

</div>
</body>
</html>