<?php
session_start();
$_SESSION['nama'] = "Candra Setiawan";
$nama = $_SESSION['nama'];
echo $nama;
?>