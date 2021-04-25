<?php
/*
Nama : MUSTOFA FIRDAUS
NRP : 203040029
Shift Praktikum : Rabu pukul 09:00
Tugas : Tugas 6 Praktikum Pemrograman Web
*/
?>
<?php 
// menghubungkan dengan file php lainnya

require 'php/function.php';

// melakukan query
$kendaraan = query("SELECT * FROM kendaraan")

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan6c</title>
</head>
<body>
  <div class="container">
      <?php foreach ($kendaraan as $motor) : ?>
        <p class="nama">
          <a href="detail.php?id=<?= $motor['id'] ?>">
              <?= $motor["nama"] ?>
          </a>
        </p>
      <?php endforeach;  ?>
  </div>
  <div class="user">
    <a href="php/login.php">
        <button type="">Masuk Ke Halaman Admin</button>
    </a>
  </div>
</body>
</html>