<?php
session_start();
$error = '';
if (isset($_POST['login'])) {
    $user = $_POST['username'];
    $pass = $_POST['password'];
    // Password khusus developer - ganti sesuai kebutuhan!
    $devpass = 'flavianusXIdeveloper2025';
    if ($user == 'admin' && $pass == $devpass) {
        $_SESSION['admin'] = true;
        header("Location: admin_panel.php");
        exit();
    } else {
        $error = 'Username/password salah!';
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Login Admin</title>
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <h2>Login Panel Admin Kelas XI</h2>
  <form method="POST" action="">
    <label>Username:
      <input type="text" name="username" required>
    </label>
    <br>
    <label>Password:
      <input type="password" name="password" required>
    </label>
    <br>
    <button type="submit" name="login">Login</button>
    <div style="color:red;"><?php echo $error; ?></div>
  </form>
  <footer>
    Website ini dikembangkan oleh <b>FlavianusNumerikCode</b>
  </footer>
</body>
</html>