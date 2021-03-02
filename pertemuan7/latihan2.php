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
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) ||
    !isset($_GET["nrp"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["gambar"])) {
    // redirect
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>


<ul>
    <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["nrp"]; ?></li>
    <li><?= $_GET["email"]; ?></li>
    <li><?= $_GET["jurusan"]; ?></li>
</ul>

<a href="latihan1.php">Kembali ke daftar Mahasiswa</a>

    
</body>
</html>