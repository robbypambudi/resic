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
        <a href="beranda.php" class="d-flex align-items-center mb-2 mb-lg-0 text-decoration-none">
          <img src="https://i.ibb.co/pj8wrG0/image-removebg-preview-1.png"/>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="beranda.php" class="nav-link px-2 text-primary">Beranda</a></li>
          <li><a href="paket.php" class="nav-link px-2 text-primary">Paket</a></li>
          <li><a href="tentang-kami.php" class="nav-link px-2 text-primary">Tentang Kami</a></li>
          <li><a href="login.html" class="nav-link px-2 text-primary">Akun</a></li>
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
        <div class="row">
          <div class="col col-lg-5 mt-5">
            <h1 class="judul">Put some dirt in your room, we'll clean it</h1>
            <h3 class="judul">Mudah pesannya, bersihnya nyata</h3>
          </div>
          <div class="col">
            <img src="pichome.png"  align="right"
             alt="img-beranda" class="img-beranda">
          </div>
        </div>

        <div class="d-flex justify-content-center flex-column text-center mt-5">
          <p>Powered By</p>

          <div class="d-flex justify-content-center">
            <p class="resic">RESIC</p>
            <p class="resic">RESIC</p>
            <p class="resic">RESIC</p>
            <p class="resic">RESIC</p>
            <p class="resic">RESIC</p>
           
          </div>

        </div>
      <div class="border-beranda border rounded shadow">
        <div class="row">
          <div class="col m-5">
            <h3 class="border-h3">Pilih paket sesuai kebutuhan Anda</h3>
            <p>Our pricing is not expensive, but it's not cheap either, it's exactly what it should be</p>
          </div>
          <div class="col rasic-img">
            <img src="img/gambar2.PNG" alt="gambar" />

          </div>
        </div>
      </div>
      <div class="d-flex justify-content-center flex-column text-center">
        <h2 class="mt-5">Testimonials</h2>
        <p class="mt-5">People love what we do and we want to ley your know </p>
        <div class="d-flex justify-content-center text-center mt-3">
            <div class="border rounded bg-light testimoni p-4 m-2">
              <p>
                "9 dari 10 pembantu rumah tangga merekomendasikan Resic."
              </p>
              <div class="d-flex justify-content-center">
              <img src="img/star.svg"/>
              <img src="img/star.svg"/>
              <img src="img/star.svg"/>
              <img src="img/star.svg"/>
              <img src="img/star.svg"/>
              </div>
              <p class="mt-2">Ryan Hikmah</p>
            </div>
            <div class="border rounded bg-light testimoni p-4 m-2">
              <p>
              "Tidak ramah, tapi bersih rumahnya. Jadi okelah."
              </p>
              <div class="d-flex justify-content-center">
              <img src="img/star.svg"/>
              <img src="img/star.svg"/>
              <img src="img/star.svg"/>
              </div>
              <p class="mt-2">Ryan Hikmah</p>
            </div>
            <div class="border rounded bg-light testimoni p-4 m-2">
              <p>
              "Paket 123 cuma beda durasi sama harga. Pilih paket 1 saja sudah bersih, tambah 2 jam masnya nganggur. "
              </p>
              <div class="d-flex justify-content-center">
              <img src="img/star.svg"/>
              <img src="img/star.svg"/>
              <img src="img/star.svg"/>
              <img src="img/star.svg"/>
              </div>
              <p class="mt-2">Ryan Hikmah</p>
            </div>
        </div>
      </div>
      <div class="border-beranda border rounded shadow mb-5">
        <div class="row">
          <div class="col m-5">
            <h3 class="border-h3">Choose with Resic today</h3>
            <p>Rumah yang bersih terdapat kenyamanan keluarga anda</p>
            <a class="btn btn-primary mt-4" href="register.php">Daftar</a>
          </div>
          <div class="col rasic-img">
            <img src="img/ceweeee.png" alt="gambar" width="250px"/>

          </div>
        </div>
      </div>
      
    </section>
  </body> 
</html>

