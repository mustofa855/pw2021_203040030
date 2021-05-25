<?php 
session_start();

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

//ambil dari url
$id = $_GET['id'];

//query mahasiswa berdasarkan id
$m = query("SELECT * FROM kendaraan WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--Import Google Icon Font-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

      <!-- Compiled and minified JavaScript -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
              
        <!-- Font -->
        <link href='https://fonts.googleapis.com/css?family=Great Vibes' rel='stylesheet'>
  
    <title>Registrasi</title>
    <style> 
        body {

    background-image: url(../assets/img/slider/road.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%; 
    }
        

    </style>
</head>
<br>
<br>
<body>
    
    <!-- <div class="container">
        <div class="card">
            <div class="card-content">
                <div class="row">
                    <div class="col s12 m12">
                    <div class="row">
                        <div class="card-image col m6">
                            <img src="../assets/img/<?= $m['img']; ?>">
                            
                    </div>
                    <br>
                    <br>
                    <br>
                        <div class="col s12 m6 ">
                            <h5>NRP : <?= $m['nama']; ?></h5>
                            <h5>Nama : <?= $m['tahun_dibuat']; ?></h5>
                            <h5>Email : <?= $m['tipe_transmisi']; ?></h5>
                            <h5>Jurusan : <?= $m['tipe_mesin']; ?></h5>
                            <h5>Jurusan : <?= $m['cc']; ?></h5>
                            <h5>Jurusan : <?= $m['harga']; ?></h5>
                        </div> -->
                        <div class="container">
                            <div class="col s12 m12 transparent" style="padding-left: 270px">
                                <div class="row">
                                    <div class="col s12 m8">
                                        <div class="card">
                                            <div class="card-image">
                                                <img src="../assets/img/<?= $m['img']; ?>">
                                            </div>
                                            <div class="card-content">
                                                <h5>Nama/Merk : <?= $m['nama']; ?></h5>
                                                <h5>Tahun Dibuat : <?= $m['tahun_dibuat']; ?></h5>
                                                <h5>Tipe Transmisi : <?= $m['tipe_transmisi']; ?></h5>
                                                <h5>Tipe Mesin : <?= $m['tipe_mesin']; ?></h5>
                                                <h5>CC : <?= $m['cc']; ?></h5>
                                                <h5>Harga : <?= $m['harga']; ?></h5>
                                            </div>
                                            <div class="card-tabs">
                                                <ul class="tabs tabs-fixed-width">
                                                    <li class="tab"><a href="ubah.php?id=<?= $m['id']; ?>">Edit</a></li>
                                                    <li class="tab"><a href="hapus.php?id=<?= $m['id']; ?>" onclick="return confirm('apakah anda yakin?')">Hapus</a></li>
                                                    <li class="tab"><a href="admin2.php">Back</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                  
             
        

     <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
      <script
      type="text/javascript"
      src="https://code.jquery.com/jquery-2.1.1.min.js"
      ></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>