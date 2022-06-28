<?php
session_start();
$DATABASE_HOST = 'localhost';
$DATABASE_USER = 'root';
$DATABASE_PASS = '';
$DATABASE_NAME = 'resic_company';
$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_error() ) {
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}


if ($stmt = $con->prepare('SELECT id_user, nama_user, password_user FROM user WHERE email_user = ?')) {
	$stmt->bind_param('s', $_POST['email']);
	$stmt->execute();
	$stmt->store_result();
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id_user, $nama_user, $password_user);
        $stmt->fetch();
        if ($_POST['pass'] === $password_user) {
            session_regenerate_id();
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $nama_user;
            $_SESSION['id'] = $id_user;
            header('Location: beranda.php');
        } else {
            echo 'Incorrect password!';
        }
    } else {
        echo 'Incorrect email';
    }

	$stmt->close();
}
?>