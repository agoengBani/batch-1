<?php

session_start();
include('koneksi.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$email = $_POST['email'];

if ($nama == '') {
   $_SESSION['msg']['nama'] = 'Kolom wajib diisi!';
}
if ($alamat == '') {
   $_SESSION['msg']['alamat'] = 'Kolom wajib diisi!';
}
if ($email == '') {
   $_SESSION['msg']['email'] = 'Kolom wajib diisi!';
}

if ($_SESSION['msg']) {
   header('location: ../../?page=edit_mahasiswa&id=' . $id);
   exit();
}

$sql = "UPDATE mahasiswa SET nama='$nama', alamat='$alamat', email='$email' WHERE id='$id'";
$query = mysqli_query($koneksi, $sql);

$_SESSION['msg']['berhasil'] = 'Data berhasil di-update.';
header('location: ../../?page=table_mahasiswa');
