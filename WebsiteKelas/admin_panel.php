<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: admin_login.php");
  exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Panel Admin Kelas XI</title>
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <h2>Panel Admin</h2>
  <ul>
    <li><a href="edit_soal.php">Kelola Soal Kuis</a></li>
    <li><a href="lihat_hasil.php">Lihat Hasil Kuis</a></li>
    <li><a href="edit_poin.php">Ubah Poin Siswa</a></li>
    <li><a href="upload_foto.php">Tambah Foto Galeri</a></li>
    <li><a href="edit_jadwal.php">Edit Jadwal</a></li>
    <li><a href="logout.php">Logout</a></li>
  </ul>
  <footer>
    Website ini dikembangkan oleh <b>FlavianusNumerikCode</b>
  </footer>
</body>
</html>