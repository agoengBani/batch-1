<?php

/**
 * ALGORITMA PROSES LOGIN
 * 1. pastikan data user ada
 * 2. jika data user ada, masuk ke halaman dashboard
 * 3. jika data user tidak ada, kembali ke halaman login tampilkan pesan "User tidak ditemukan".
 * 
 * VALIDASI
 * 1. beri pesan global jika email dan password kosong, pesannya "Email atau password salah".
 * index.html
 * index.php
 */

session_start();

include('../../pages/proses/koneksi.php');

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

$sql = "SELECT * FROM users WHERE email='$email'";
$query = mysqli_query($koneksi, $sql);
$user = mysqli_fetch_assoc($query);

if (!$user) {
   $_SESSION['msg']['global'] = "User tidak ditemukan!";
   header('location: ../login.php');
   exit();
}

if (!password_verify($password, $user['password'])) {
   $_SESSION['msg']['global'] = "Email atau password salah!";
   header('location: ../login.php');
   exit();
}

// jika user ada, masukkan ke halaman dashboard
$_SESSION['login'] = true;
header('location: ../../?page=dashboard');
