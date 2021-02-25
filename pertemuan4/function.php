<?php 
/*
Mustofa Firdaus
203040030
https://github.com/mustofa855/pw2021_203040030
Pertemuan 4 - 25 Februari 2021
Mempelajari mengenai sintaks PHP tentang function
*/
?>

<?php
function salam($waktu = "Datang",$nama = "Admin") {
    return "Selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Pagi", "Mustofa"); ?></h1>
</body>
</html>


