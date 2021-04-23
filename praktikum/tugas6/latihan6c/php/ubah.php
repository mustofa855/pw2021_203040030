<?php
session_start();

if(!isset($_SESSION["username"])) {
  header("Location: login.php");
  exit;
}
require 'function.php';

$id = $_GET['id'];
$motor = query("SELECT * FROM kendaraan WHERE id = $id")[0];

if(isset($_POST['ubah'])){
    if(ubah($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil diubah!);
            document.location.href = 'admin.php';
        </script>";
    }else{
        echo "<script>
            alert('Data Gagal diubah!');
            document.location.href = 'admin.php';
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
    <title>Form Ubah Data Kendaraan Bermotor</title>
</head>
<body>
<h3>Form Ubah Data Kendaraan Bermotor</h3>
<input type="hidden" name="id" value="<?= $motor['id']; ?>">
    <form action="" method="post">
        <ul>
            <li>
                <label for="nama">Nama :</label><br>
                <input type="text" name="nama" id="nama" required value="<?= $motor['nama']; ?>"><br><br>
            </li>
            <li>
                <label for="tahun_dibuat">Tahun Pembuatan :</label><br>
                <select name="tahun_dibuat" id="tahun_dibuat" required>
                    <option value="">--------PILIH TAHUN--------</option>
                    <option value="2010">2010</option>
                    <option value="2011">2011</option>
                    <option value="2012">2012</option>
                    <option value="2013">2013</option>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                </select>
            </li>
            <li>
                <label for="harga">Harga(USD) :</label><br>
                <input type="text" name="harga" id="harga" required value="<?= $motor['harga']; ?>"><br><br>
            </li>
            <br>
            <button type="submit" name="ubah">Ubah Data !</button>
            <button typr="submit">
                <a href="index.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </ul>
    
    
    </form>
</body>
</html>