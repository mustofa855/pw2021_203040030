<?php
/*
Nama : MUSTOFA FIRDAUS
NRP : 203040029
Shift Praktikum : Rabu pukul 09:00
Tugas : Tugas 2 Praktikum Pemrograman Web
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan2b</title>
    <style>
        .style1{
            border: 1px solid black;
            padding: 10px;
            font-family: arial;
            
        }  
    </style>
</head>
<body>
<?php
$GLOBALS ['jawabanIsset']= " Isset adalah = Suatu fungsi pada php untuk mengecek apakah suatu variabel sudah pernah dibuat atau belum
dan juga isset ini akan menghasilkan nilai boolean, apakah true atau false, ketika kita belum membuat sebuah variabel
maka isset akan menghasilkan false. Contohnya kita akan mengecek apakah tersedia variabel jawabanisset
saat akan dieksekusi,  maka gunakanlah fungsi isset. <br><br>";
$GLOBALS ['jawabanEmpty'] = " Empty adalah =  Suatu fungsi yang digunakan untuk mengecek apakah variabel yang ada kosong atau tidak,
Contohnya kita akan mengecek apakah sebuah variabel jawabanEmpty sudah diisi atau belum, untuk menghindari kekosongan variabel maka
gunakanlah fungsi empty.";
   
function soal($style="style1"){
    return "<div class='$style'<p>". $GLOBALS ['jawabanIsset'] . $GLOBALS ['jawabanEmpty'] ."</p></div>";
}
    echo soal("style1")
?>
    
</body>
</html>