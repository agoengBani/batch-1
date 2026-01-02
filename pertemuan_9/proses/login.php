<?php
session_start();

include('koneksi.php');

$email = $_POST['email'];
$password = $_POST['password'];

// simpan email sementara
$_SESSION['ex_email'] = $email;

if ($email == '') {
   $_SESSION['msg']['email'] = "Kolom wajib diisi.";
}

if ($password == '') {
   $_SESSION['msg']['password'] = "Kolom wajib diisi.";
}

if (isset($_SESSION['msg'])) {
   header('location: ../login.php');
   exit();
}

$sql = "SELECT email, password FROM users WHERE email='$email' AND password='$password'";
$query = mysqli_query($koneksi, $sql);
$numRow = mysqli_num_rows($query);

// periksa apakah user ada
if ($numRow == 0) {
   $_SESSION['msg']['global'] = "User tidak ditemukan!";
   unset($_SESSION['ex_email']);
   header('location: ../login.php');
   exit();
}

// jika user ada, masukkan ke halaman dashboard
$_SESSION['login'] = true;
header('location: ../dashboard.php');