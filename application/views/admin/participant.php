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
    <title>List Pendaftar</title>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark navbar-fixed-top">
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

</body>
</html>