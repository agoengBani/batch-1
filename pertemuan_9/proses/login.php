<?php

/**
 * ALGORITMA PROSES LOGIN
 * 1. pastikan data user ada
 * 2. jika data user ada, masuk ke halaman dashboard
 * 3. jika data user tidak ada, kembali ke halaman login tampilkan pesan "User tidak ditemukan".
 * 
 * VALIDASI
 * 1. beri pesan global jika email dan password kosong, pesannya "Email atau password salah".
 */

session_start();

include('koneksi.php');

$email = $_POST['email'];
$password = $_POST['password'];

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
   header('location: ../login.php');
   exit();
}

// jika user ada, masukkan ke halaman dashboard
header('location: ../dashboard.php');
