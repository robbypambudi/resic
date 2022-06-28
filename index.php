<?php 
require_once("./db.php");
$sql = "SELECT * FROM user";
$result = $db->query($sql);
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
          <a type="button" class="btn btn-outline-dark me-2" href="login.html">Masuk</a>
          <a type="button" class="btn btn-primary" href ="register.php">Daftar</a>
        </div>
      </div>
    </div>
  </header>


<body>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>