<?php
/*
Nama : MUSTOFA FIRDAUS
NRP : 203040029
Shift Praktikum : Rabu pukul 09:00
Tugas : Tugas 2 Praktikum Pemrograman Web
*/
?>
<?php 
function hitungDeterminan($a,$b,$c,$d) {

    $hasil = (($a*$d)-($b*$c));

    // baris code perhitung determinan

    // menampilkan matriks
    echo "<table style='border-left: 1px solid black; border-right:1px solid black;' cellspacing='5' cellpadding='5'
            <tr>
                <td>$a</td>
                <td>$b</td>
            
            </tr>
            <tr>
                <td>$c</td>
                <td>$d</td>
            
            </tr>
        </table>";
    echo "<h3> Hasil dari Determinan dari matriks tersebut adalah $hasil </hasil."; //menampilkan Teks dibawah matriks
        return;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?= hitungDeterminan(1,2,3,4)?>
</body>
</html>