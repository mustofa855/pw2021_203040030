<?php
/*
Mustofa Firdaus
203040030
https://github.com/mustofa855/pw2021_203040030
Pertemuan 7 - 02 Maret 2021
Mempelajari mengenai sintaks PHP tentang get and post
*/
?>
<?php
// // Variable Scope / lingkup variabel
// $x = 10;
// // echo $x;
// function tampilx() {
//     global $x;
//     echo $x;
// }

// tampilx();
// // echo "<br>";
// // echo $x
// ?>

<?php
// SUPERGLOBALS
// Variabel global milik PHP
// merupakan Array Associative
// $_GET, $_POST, $_REQUEST, $_SESSION,
// $_COOKIE, $_SERVER, $_ENV
?>
<?php
// (1) $_GET
$mahasiswa = [
    [
        "nama" => "Mustofa Firdaus", 
        "nrp" => "203040030",
        "email" => "203040030@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "profil.jpg"
    ],
    [
        "nama" => "Ade Hasanudin", 
        "nrp" => "033040001",
        "email" => "ade123@gmail.com",
        "jurusan" => "Teknik Industri",
        "tugas" => [90, 88, 100],
        "gambar" => "images.png"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
    <li>
        <a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=
        <?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>&jurusan=
        <?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
    </li>   
<?php endforeach; ?>
</ul>
</body>
</html>

<?php
// $_GET["nama"] = "Mustofa Firdaus";
// $_GET["nrp"] = "203040030";
// var_dump($_GET)
?>



