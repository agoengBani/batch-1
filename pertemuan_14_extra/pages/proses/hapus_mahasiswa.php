<?php
session_start();
include('koneksi.php');

$id = $_REQUEST['id'];

$sql = "DELETE FROM mahasiswa WHERE id='$id'";
$query = mysqli_query($koneksi, $sql);

$_SESSION['msg']['berhasil'] = 'Data berhasil dihapus!';
header('location: ../../?page=table_mahasiswa');
