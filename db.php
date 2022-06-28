<?php 
define("HOST", "localhost");
define("USER", "root");
define("PASS", "");
define("DB", "resic_company");
$db = new mysqli(HOST, USER, PASS, DB);
$link = mysqli_connect("localhost", "root", "", "resic_company");
// if ($db-> connect_error) {
//     die("Koneksi gagal");
// }
// else{
//     die("Koneksi berhasil");
// }
?>