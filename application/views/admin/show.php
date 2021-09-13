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
    <title>Wellcome</title>
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
                <a  class="dropdown-item" href="<?= base_url('admin')?>">Beranda</a>
                <a class="dropdown-item" href="<?= base_url('admin/show/'. $login['username'])?>">Edit Profile</a>
                <a  class="dropdown-item" href="<?= base_url('auth/logout')?>">Log Out</a>
            </div>
        </li>
    </ul>
</div>
</nav>
<br> <br> <br>

<div class="container">
    <table class="table table-hover table-dark table-striped">
        <thead>
            <tr>
                <td>Nama Lengkap</td>
                <td>NIK</td>
                <td>Tempat,Tanggal Lahir</td>
                <td>Umur</td>
                <td>Alamat</td>
                <td>Nama Ayah</td>
                <td>Pekerjaan Ayah</td>
                <td>Instansi Ayah</td>
                <td>Gaji Ayah</td>
                <td>Nama Ibu</td>
                <td>Pekerjaan Ibu</td>
                <td>Instansi ibu</td>
                <td>Gaji Ibu</td>
                <td>Asal Sekolah</td>
                <td>Ijazah</td>
                <td>Kartu Keluarga</td>
                <td>Bukti Pembayaran</td>
            </tr>
        </thead>
        <tbody>
            <?php foreach($users as $user): ?>
                <tr>
                    <td><?= $user['namaLengkap'] ?></td>
                    <td><?= $user['nik'] ?></td>
                    <td><?= $user['ttl'] ?></td>
                    <td><?= $user['umur'] ?></td>
                    <td><?= $user['alamat'] ?></td>
                    <td><?= $user['namaBapak'] ?></td>
                    <td><?= $user['kerjaBapak'] ?></td>
                    <td><?= $user['tempatBapak'] ?></td>
                    <td><?= $user['gajiBapak'] ?></td>
                    <td><?= $user['namaIbu'] ?></td>
                    <td><?= $user['kerjaIbu'] ?></td>
                    <td><?= $user['tempatIbu'] ?></td>
                    <td><?= $user['gajiIbu'] ?></td>
                    <td><?= $user['asalSekolah'] ?></td>
                    <td><?php
                    $user_image = [  'src' => 'uploads/' . $user['ijazah'],
                    'height'  => '50'
                ];
                echo img($user_image)
                ?></td>
                <td><?php
                $user_image2 = [  'src' => 'uploads/' . $user['kk'],
                'height'  => '50'
            ];
            echo img($user_image2)
            ?></td>
            <td><?php
                $user_image3 = [  'src' => 'uploads/' . $user['bukti'],
                'height'  => '50'
            ];
            echo img($user_image3)
            ?></td>
        </tr>
    <?php endforeach ?>
</tbody>
</table>

</div>


<footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; SMAN Giraf 2019</p>
  </div>
  <!-- /.container -->
</footer>

</div>
</body>
</html>