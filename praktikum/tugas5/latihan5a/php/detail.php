<?php 
// mengecek apakah ada id yang dikirimkan 
// jika tidak maka akan dikembalikan ke halaman index.php

if (!isset($_GET['id'])) {
    header("Location: ../index.php");
    exit;
}

require 'function.php';

// mengambil id dari url 
$id = $_GET['id'];

// melakukan query dengan parameter id yang diambil dari url
$motor = query("SELECT * FROM kendaraan WHERE id = $id ")[0];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan5a</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="foto">
            <img src="../assets/img/<?= $motor["img"] ?>"alt="" width="100">
        </div>
        <div class="keterangan">
            <li><?= $motor["nama"];  ?></li>
            <li><?= $motor["tahun_dibuat"];   ?></li>
            <li><?= $motor["tipe_transmisi"]; ?></li>
            <li><?= $motor["tipe_mesin"]; ?></li>
            <li><?= $motor["harga"]; ?></li>
            <li><?= $motor["cc"]; ?></li>
            
        </div>
        <button class="tombol-kembali"><a href="../index.php">Kembali</a></button>
    </div>
</body>
</html>