<?php
session_start();
if (!isset($_SESSION['admin'])) {
  header("Location: admin_login.php");
  exit();
}
// CRUD soal kuis, ambil soal dari db
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Edit Soal Kuis</title>
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <h2>Edit/Tambah/Hapus Soal Kuis</h2>
  <!-- Form tambah, list soal, tombol edit/hapus -->
  <footer>
    Website ini dikembangkan oleh <b>FlavianusNumerikCode</b>
  </footer>
</body>
</html>