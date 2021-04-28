<?php
/*
Mustofa Firdaus
203040030
https://github.com/mustofa855/pw2021_203040030
Pertemuan 10 - 22 April 2021
Mempelajari mengenai sintaks PHP
*/
?>
<?php 
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h3>Daftar Mahasiswa</h3>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>#</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>

        <?php $i = 1; 
        foreach($mahasiswa as $mhs) : ?>

        <tr>
            <td><?= $i++; ?></td>
            <td><img src="img/<?= $mhs['gambar']; ?>" width="60"></td>
            <td><?= $mhs['nama']; ?></td>
            <td>
                <a href="detail.php?id=<?= $mhs['id'] ?>">lihat detail</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>