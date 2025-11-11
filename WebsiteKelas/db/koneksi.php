<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'webkelasxi';
$conn = mysqli_connect($host, $user, $pass, $dbname);
if (!$conn) {
  die('Gagal koneksi ke database: ' . mysqli_connect_error());
}
?>