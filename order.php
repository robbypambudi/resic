<?php 
session_start();
if (!isset($_SESSION['loggedin'])) {
	header('Location: login.html');
	exit;
}
require_once("./db.php");
if (!empty($_POST)) {
$paket = ($_POST['paket']);
$karyawan = ($_POST['karyawan']);
$produk = ($_POST['produk']);
$jumlah = ($_POST['jumlah']);
$alamat = ($_POST['alamat']);
$alamat = ($_POST['alamat']);
$sql = "INSERT INTO pesanan (user_id_user, paketlayanan_id_paket, karyawan_idkaryawan_pembersih, produk_idproduk, jumlah produk_pesanan, alamat, waktu_pemesanan, total_pembayaran, cara_pembayaran) 
        VALUES ('$_SESSION[id]','$paket','$karyawan','$produk','$jumlah','$alamat','NOW()','$total_pembayaran','$cara_pembayaran')";
if(mysqli_query($link, $sql)){
    echo "Berhasil Ditambah";
} else{
    echo "Gagal execute: $sql. " . mysqli_error($link);
}

header("location:index.php");

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
          <li><a href="#" class="nav-link px-2 text-primary">Beranda</a></li>
          <li><a href="#" class="nav-link px-2 text-primary">Paket</a></li>
          <li><a href="#" class="nav-link px-2 text-primary">Tentang Kami</a></li>
        </ul>
        <a href="logout.php"><input type="button" class="btn btn-primary btn-sm	" value="Log Out"></a>
      </div>
    </div>
  </header>
  <section class="h-100" style="margin-top: 100px">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
            <img src="./img/pemesanan.png"
            class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <form>
            <h1>Form Pemesanan</h1>
            <!-- Produk yang Dipilih input -->
            <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="Produk yang Dipilih" />
            </div>

            <!-- Alamat input -->
            <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="Alamat" />
            </div>

            <!-- No. Handphone input -->
            <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="No. Handphone" />
            </div>

             <!-- Paket yang Dipilih input -->
            <div class="form-outline mb-4">
                <input type="password" id="form3Example4" class="form-control form-control-lg"
                placeholder="Paket yang Dipilih" />
            </div>
</html>
