<?php
session_start();

// panggil koneksi
include('koneksi.php');

// form input
$email = $_POST['email'];
$password = $_POST['password'];

//! validasi
if ($email == '') {
    $_SESSION['msg'] ['email'] = "Kolom wajib diisi";
}

if ($password == '') {
    $_SESSION['msg'] ['password'] = "Kolom wajib diisi";
}

if (isset($_SESSION['msg'])) {
    header('location: ../login.php');
    exit();
}

//? perintah SQL untuk memasukkan data ke tabel database
$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
$query = mysqli_query($koneksi, $sql);
$numRow = mysqli_num_rows($query);

if ($numRoww == 0) {
    $_SESSION['msg'] ['global'] = "User tidak ditemukan";
    header('location: ../dashboard.php');
    exit();
}

header('location: ../login.php');
