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
        <a href="#" class="d-flex align-items-center mb-2 mb-lg-0 text-decoration-none">
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
        <!-- Judul -->
        <div class="d-flex justify-content-center text-center">
            <div class="paket">
                <h3>Paket</h3>
                <p> Our pricing is not exspensive, but it's not cheap either,
                    it's exactly what it should be 
                </p>
            </div>
        </div>

        <!-- Kartu -->
        <div class="d-flex justify-content-center ">
            <div class="border rounded bg-light card mt-5 shadow-sm">
                <div class="p-3 fnt" >
                    <h4 class="font-weight-normal"> Paket Sterilisasi A</h4>
                    <p class="harga">Rp <span>225K </span>
                    <p>General Cleaning (2jam) + ULV Fogging Disinfektan</p>
                    <button class="btn btn-light btn-paket " >
                        <a href="pemesanan.php">Get Started with Paket Sterilisasi A</a>
                    </button>
                </div>
            </div>
            <div class="border rounded bg-light card btn-paket-b shadow">
                <div class="p-3 fnt" >
                    <div class="text-center d-flex justify-content-center">
                        <p class="bg-primary rounded text-white p-1">Most Popular</p>
                    </div>
                    <h4 class="font-weight-normal"> Paket Sterilisasi B</h4>
                    <p class="harga">Rp <span>275K </span>
                    <p>General Cleaning (3jam) + ULV Fogging Disinfektan</p>
                    <button class="btn btn-light btn-paket">
                        <a href="pemesanan.php">Get Started with Paket Sterilisasi B</a>
                    </button>
                </div>
            </div>
            <div class="border rounded bg-light card mt-5 shadow-sm">
                <div class="p-3 fnt" >
                    <h4 class="font-weight-normal"> Paket Sterilisasi C</h4>
                    <p class="harga">Rp <span>350K </span>
                    <p>General Cleaning (4jam) + ULV Fogging Disinfektan</p>
                    <button class="btn btn-light btn-paket">
                        <a href="pemesanan.php" class="disabled">Get Started with Paket Sterilisasi C</a>
                    </button>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-center mt-5">
            
            <h2>Compare Features</h2>
            
        </div>
        <div class="d-flex justify-content-center ">
            <div class="border rounded card mt-5 card-features">
                <div class="mb-3">
                    <h2>Paket Sterilisasi A</h2>
                </div>
                <div class="d-flex flex-column ">
                    <div class="d-flex p-1">
                        <div id ="tick-mark" class="border rounded-circle tick-mark "></div>
                        <p>Menyapu</p>
                    </div>
                    <div class="d-flex p-1">
                    <div id ="tick-mark" class="border rounded-circle tick-mark "></div>
                        <p>Mengepel</p>
                    </div>
                    <div>
                    <div class="d-flex p-1">
                    <div id ="tick-mark" class="border rounded-circle tick-mark "></div>
                        <p>Membersikan Kaca</p>
                    </div>
                    </div>
                    <div class="d-flex p-1">
                    <div id ="tick-mark" class="border rounded-circle tick-mark "></div>
                        <p>Vacuum Cleaner</p>
                    </div>
                    <div class="d-flex p-1">
                    <div id ="tick-mark" class="border rounded-circle tick-mark "></div>
                        <p>Fogging</p>
                    </div>
                    <div class="d-flex p-1">
                    <div id ="tick-mark" class="border rounded-circle tick-mark "></div>
                        <p>Durasi Pembersihan 2 Jam</p>
                    </div>
                </div>
             </div>
            <div class="border rounded card mt-5 card-features">
                <div class="mb-3">
                    <h2>Paket Sterilisasi B</h2>
                </div>
                <div class="d-flex flex-column ">
                    <div class="d-flex p-1">
                        <div id ="tick-mark" class="border rounded-circle tick-mark "></div>
                        <p>Menyapu</p>
                    </div>
                    <div>
                    <div class="d-flex p-1">
                    <div id ="tick-mark" class="border rounded-circle tick-mark "></div>
                        <p>Mengepel</p>
                    </div>
                    </div>
                    <div>
                    <div class="d-flex p-1">
                    <div id ="tick-mark" class="border rounded-circle tick-mark "></div>
                        <p>Membersikan Kaca</p>
                    </div>
                    </div>
                    <div>
                    <div class="d-flex p-1">
                    <div id ="tick-mark" class="border rounded-circle tick-mark "></div>
                        <p>Vacuum Cleaner</p>
                    </div>
                    </div>
                    <div>
                    <div class="d-flex p-1">
                    <div id ="tick-mark" class="border rounded-circle tick-mark "></div>
                        <p>Fogging</p>
                    </div>
                    </div>
                    <div class="d-flex p-1">
                    <div id ="tick-mark" class="border rounded-circle tick-mark "></div>
                        <p>Durasi Pembersihan 3 Jam</p>
                    </div>
                    <!-- </div> -->
                </div>
             </div>
            <div class="border rounded card mt-5 card-features">
                <div class="mb-3">
                    <h2>Paket Sterilisasi C</h2>
                </div>
                <div class="d-flex flex-column ">
                    <div class="d-flex p-1">
                        <div id ="tick-mark" class="border rounded-circle tick-mark "></div>
                        <p>Menyapu</p>
                    </div>
                    <div>
                    <div class="d-flex p-1">
                    <div id ="tick-mark" class="border rounded-circle tick-mark "></div>
                        <p>Mengepel</p>
                    </div>
                    </div>
                    <div>
                    <div class="d-flex p-1">
                    <div id ="tick-mark" class="border rounded-circle tick-mark "></div>
                        <p>Membersikan Kaca</p>
                    </div>
                    </div>
                    <div>
                    <div class="d-flex p-1">
                    <div id ="tick-mark" class="border rounded-circle tick-mark "></div>
                        <p>Vacuum Cleaner</p>
                    </div>
                    </div>
                    <div>
                    <div class="d-flex p-1">
                    <div id ="tick-mark" class="border rounded-circle tick-mark "></div>
                        <p>Fogging</p>
                    </div>
                    </div>
                    <div class="d-flex p-1">
                    <div id ="tick-mark" class="border rounded-circle tick-mark "></div>
                        <p>Durasi Pembersihan 4 Jam</p>
                    </div>
                    </div>
                </div>
             </div>
        </div>
        
    </div>

  </section>
</html>

