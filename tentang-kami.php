<?php
session_start();


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet" type="text/css"/>
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
          <li><a href="paket.php" class="nav-link px-2 text-primary">Paket</a></li>
          <li><a href="tentang-kami.php" class="nav-link px-2 text-primary">Tentang Kami</a></li>
          <li><a href="#" class="nav-link px-2 text-primary">Akun</a></li>
        </ul>
        <?php
        if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]){
        echo (
        '<div class="text-end">
          <a type="button" class="btn btn-outline-dark me-2" href="#">'. $_SESSION["name"] .' </a>
          <a type="button" class="btn btn-danger" href ="logout.php">logout</a>
        </div>'
        );
        } else {
          echo (
            '<div class="text-end">
            <a type="button" class="btn btn-outline-dark me-2" href="login.html">Login </a>
            <a type="button" class="btn btn-danger" href ="register.php">Daftar</a>
            </div>'
          );
        }
        ?>

      </div>
    </div>
  </header>
  <section class="h-100" style="margin-left: 500 px">
    <div class="container">
        <div class="d-flex flex-column justify-content-center text-center ">
            <h3>Tentang Kami</h3>
            <img src="img/tentangkami.PNG" class="rounded imagetentangkami" width="100%"  alt="tentangkami" />
            <hr class="rounded-g">

            <div class="row">
                <div class="col">
                    <h3 class="mt-5 membersikan"> Membersikan hingga sudut terdalam </h3>
                </div>
                <div class="col">
                    <img src="pichome.png" alt="ahllo" width="100%" />
                </div>
            </div> 

            <h2>Team</h2>
            <p> Meet the people behind our megical product </p>
            <img src="home.png" />

            <div class="bg-light border rounded">
                <div class="row">
                    <div class="col">
                        <h3 class="text-center font-weight-bold"></h3>
                    </div>
                    <div class="col"
                </div>
            </div>
        </div>

    </div>
      
    </section>
  </body> 
</html>

