<?php 
session_start();

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

// cek apakh tombol tambah sudah ditekan
if(isset($_POST['tambah'])) {
    if(tambah($_POST) > 0) {
        echo "<script>
            alert('Data Berhasil Ditambahkan');
            document.location.href = 'admin.php';
        </script>";
    }else{
        echo "<script>
            alert('Data Gagal Ditambahkan');
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
    
     
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      
      <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
            
      <!-- Font -->
      <link href='https://fonts.googleapis.com/css?family=Great Vibes' rel='stylesheet'>
  
      
    <title>Login</title> 
    <style> 
        body {

    background-image: url( ../assets/img/slider/108618.jpg);
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: 100% 100%; 
    opacity: 0,3;

        }
        

    </style>
        

</head>
<br><br><br>
<body>
<div class="container">
    
    </div>

<div class="container">
    <div class="col s12 m7 red darken-4">
        <div class="card horizontal">
            <div class="card-image">
                <img src="../assets/img/tambah.jpg">
                <img src="../assets/img/slider/racing.jpg" width="10px" alt="">
            </div>

            <div class="card-stacked">
                <div class="card-content">
            <form class="col s12" action="" method="POST" enctype="multipart/form-data">
            <div class="row ">
                <div class="input-field col s12">
                    <input type="text" name="nama" autofocus required>
                    <label for="nama">Nama/Merek :</label>
                </div>
                <div class="input-field col s6">
                    <input  type="date" name="tahun_dibuat" required>
                    <label for="tahun_dibuat">Tahun Dibuat :</label>
                </div>
                <div class="input-field col s6">
                    <input  type="text" name="tipe_transmisi" required>
                    <label for="tipe_transmisi">Tipe Transmisi :</label>
                </div>
                <div class="input-field col s6">
                    <input  type="text" name="tipe_mesin" required>
                    <label for="tipe_mesin">Tipe Mesin :</label>
                </div>
                <div class="input-field col s6">
                    <input  type="text" name="cc" required>
                    <label for="cc">cc :</label>
                </div>
                <div class="input-field col s6">
                    <input  type="text" name="harga" required>
                    <label for="harga">Harga :</label>
                </div>
                <div class="input-field "></div>
                    <label class="col s12 m12">
                    Gambar :
                    <input type="file" name="gambar" class="gambar" onchange="previewImage()">
                    </label>

                <img src="../assets/img/nophoto.png" width="120" style="display: block;" class="img-preview">
                <br>
                <button type="submit" name="tambah">Tambah Data!</button>
                <br>
                <a href="admin.php" class="waves-effect waves-teal btn-flat white-text grey darken-2">Back to Dashboard</a>
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
    <script src="../js/script.js"></script>
</body>