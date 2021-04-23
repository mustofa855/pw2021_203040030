<?php
require 'function.php';

if(isset($_POST["register"])) {
    if(registrasi($_POST) > 0) {
        echo "<script>
            alert('Registrasi Berhasil');
            document.location.href = 'login.php';
        </script>";
    } else{
        echo "<script>
            alert('Registrasi Gagal')
        </script>";
    }
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
    <div>
        <table>
            <tr>
                <td><label for="username">username</label></td>
                <td>:</td>
                <td><input type="text" name="username" placeholder="username"></td>
            </tr>
            <tr>
                <td><label for="password">password</label></td>
                <td>:</td>
                <td><input type="password" name="password" placeholder="password"></td>
            </tr>
        </table>
        <button type="submit" name="register">REGISTER</button>
    </div>
    </form>
</body>
</html>