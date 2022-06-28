<?php 
require_once("./db.php");
if (!empty($_POST)) {
$nama = ($_POST['nama']);
$pass = ($_POST['pass']);
$email = ($_POST['email']);
$alamat = ($_POST['alamat']);
$notelp = ($_POST['notelp']);
$sql = "INSERT INTO user (nama_user, password_user, email_user, alamat_user, notelp_user) VALUES ('$nama', '$pass', '$email', '$alamat', '$notelp')";
if(mysqli_query($link, $sql)){
    echo "Berhasil Ditambah";
} else{
    echo "Gagal execute: $sql. " . mysqli_error($link);
}
  header("location:login.html");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Resic.co</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  </head>
<body style="background-color: #ededed">
  <header class="p-3">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-decoration-none">
          <img src="https://i.ibb.co/pj8wrG0/image-removebg-preview-1.png"/>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="beranda.php" class="nav-link px-2 text-primary">Beranda</a></li>
          <li><a href="#" class="nav-link px-2 text-primary">Paket</a></li>
          <li><a href="#" class="nav-link px-2 text-primary">Tentang Kami</a></li>
          <li><a href="#" class="nav-link px-2 text-primary">Akun</a></li>
        </ul>

        <div class="text-end">
          <a href="login.html" type="button" class="btn btn-outline-dark me-2">Masuk</a>
          <a href="register.php" type="button" class="btn btn-primary">Daftar</a>
        </div>
      </div>
    </div>
  </header>
  <section class="h-100" style="margin-top: 100px">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="https://i.ibb.co/rmZ98Xd/image-removebg-preview.png"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
    <div class="container">
        <h1> Daftar Baru</h1>
        <form method="post">
        <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" placeholder="Enter Name" required name="nama">
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" aria-describedby="emailHelp" placeholder="Enter Pass" required name="pass">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter Email" required name="email">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" class="form-control" id="alamat" aria-describedby="emailHelp" placeholder="Enter Address" required name="alamat">
                    </div>
                    <div class="form-group">
                        <label for="notelp">Nomor Telepon</label>
                        <input type="notelp" class="form-control" id="notelp" aria-describedby="emailHelp" placeholder="Enter Phone Number" required name="notelp">
                    </div>
                    <br>
                  <input type="submit" class="btn btn-primary" value="Submit"></a>
                </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
</html>