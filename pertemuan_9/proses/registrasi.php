<?php
session_start();

// panggil koneksi
include('koneksi.php');

// form input
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];
$password = $_POST['password'];
$konfirmasi_password = $_POST['konfirmasi_password'];

//! validasi
if (empty($nama)) {
   $_SESSION['msg']['nama'] = "Kolom wajib diisi";
}

if (empty($alamat)) {
   $_SESSION['msg']['alamat'] = "Kolom wajib diisi";
}

if (empty($email)) {
   $_SESSION['msg']['email'] = "Kolom wajib diisi";
}

if (empty($password)) {
   $_SESSION['msg']['password'] = "Kolom wajib diisi";
}

if (empty($konfirmasi_password)) {
   $_SESSION['msg']['konfirmasi'] = "Kolom wajib diisi";
}

if ($konfirmasi_password != $password) {
   $_SESSION['msg']['not-konfirmasi'] = "Konfirmasi Password harus sama dengan Password";
   header('location: ../registrasi.php');
   exit();
}

if ($_SESSION['msg']) {
   header('location: ../registrasi.php');
   exit();
}

//? perintah SQL untuk memasukkan data ke tabel database
$sql = "INSERT INTO users(nama, alamat, email, password) VALUES ('$nama','$alamat','$email','$password')";
mysqli_query($koneksi, $sql);

header('location: ../registrasi.php');
