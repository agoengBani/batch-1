<?php

include('koneksi.php');

$sql = "SELECT * FROM mahasiswa";
$query = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($query);
