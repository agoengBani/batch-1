<?php

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

session_start();
include('koneksi.php');

//! Validasi
if ($nama == '') {
   $_SESSION['msg']['nama'] = 'Kolom nama wajib diisi';
}
if ($alamat == '') {
   $_SESSION['msg']['alamat'] = 'Kolom alamat wajib diisi';
}
if ($email == '') {
   $_SESSION['msg']['email'] = 'Kolom email wajib diisi';
}

if (isset($_SESSION['msg'])) {
   header('location: ../form_mahasiswa.php');
   exit();
}

//? Simpan data
$sql = "INSERT INTO mahasiswa (nama, alamat, email) VALUE ('$nama', '$alamat', '$email')";
$query = mysqli_query($koneksi, $sql);
if ($sql) {
   $_SESSION['msg']['berhasil'] = 'Data berhasil disimpan.';
} else {
   $_SESSION['msg']['gagal'] = 'Data gagal disimpan!';
}
header('location: ../form_mahasiswa.php');