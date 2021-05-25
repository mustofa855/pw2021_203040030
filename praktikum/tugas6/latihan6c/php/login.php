<?php
session_start();
require 'function.php';
// Melakukan pengecekan apakah user sudah melakukan login jika sudah redirect ke halaman admin
if(isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}
//login
if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $passsword = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    //mencocokan username dan password
    if(mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if($passsword == $row['password']) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = $row['id'];
        }
        if($row['id'] == $_SESSION['hash']) {
            header("Location: admin.php");
            die;
        }
        header("Location: ../index.php");
        die;
    }
    $error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    div, p {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
button:hover {
  background-color: #45a049;
}
button[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=text] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
button[type=submit]:hover {
  background-color: #45a049;
}
    </style>
</head>
<body>

    <form action="" method="post">
    <?php if(isset($error)) : ?>
        <p style="color: red; font-style: italic;">Username atau password salah</p>
    <?php endif; ?>
    <div>
        <table>
            <tr>
                <td><label for="username">Username</label></td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="Masukan Username..."></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="Masukan Password Anda..."></td>
            </tr>
        </table>
        <div class="remember">
            <input type="checkbox" name="remember">
            <label for="remember">Remember Me</label>
        </div>
        <button type="submit" name="submit">Login</button>
    </form>
    </div>
    
</body>
</html>
