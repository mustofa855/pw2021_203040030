<?php 
session_start();

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

// jika tidak ada id di url
if(!isset($_GET['id'])) {
    header("Location: admin.php");
    exit;
}

// Ambil id dari url

$id = $_GET['id'];

// Query Mahasiswa berdasarkan id
$m = query("SELECT * FROM kendaraan WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if(isset($_POST['ubah'])) {
    if(ubah($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil Diubah!');
            document.location.href = 'admin.php';
        </script>";
    }else{
        echo "<script>
            alert('Data Gagal Diubah!');
            document.location.href = 'admin.php';
        </script>";
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"/>
    
    <!-- Font -->
    <link href='https://fonts.googleapis.com/css?family=Great Vibes' rel='stylesheet'>

    <!-- My CSS -->
    <link rel="stylesheet" href="../assets/css/stylesheet.css">

</head>

<body>
    <div class="container">
    <h3>Form Ubah Data Mahasiswa</h3>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $m['id']; ?>">
        <ul>
            <p>
            <label>
                Nama/Merek :
                <input type="text" name="nama" required value="<?= $m['nama']; ?>">
            </label>
            </p>
            <p>
            <label>
                Tahun Dibuat :
                <input type="date" name="tahun_dibuat" required value="<?= $m['tahun_dibuat']; ?>">
            </label>
            </p>
            <p>
            <label>
                Tipe Mesin :
                <input type="text" name="tipe_mesin" required value="<?= $m['tipe_mesin']; ?>">
            </label>
            </p>
            <p>
            <label>
                Harga :
                <input type="text" name="harga" required value="<?= $m['harga']; ?>">
            </label>
            </p>
            <p>
            <input type="hidden" name="gambar_lama" value="<?= $m['img']; ?>">
            <label>
                Gambar :
                <input type="file" name="gambar" class="gambar" onchange="previewImage()" >
            </label>
            <br>
            <img src="../assets/img/<?= $m['img']; ?>" width="500" style="display: block;" class="img-preview">
            </p>
            <p>
            <button type="submit" name="ubah">Ubah Data!</button>
            </p>
            <a href="admin2.php" class="waves-effect waves-teal btn-flat white-text grey darken-2">Batal</a>
        </ul>
    
    </form>
    </div>
  

<script src=" ../assets/js/script.js"></script>
<script type="text/javascript" src="js/materialize.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script
    type="text/javascript"
    src="https://code.jquery.com/jquery-2.1.1.min.js"
    ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

</body>