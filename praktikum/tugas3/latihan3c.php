<?php
/*
Nama : MUSTOFA FIRDAUS
NRP : 203040029
Shift Praktikum : Rabu pukul 09:00
Tugas : Tugas 3 Praktikum Pemrograman Web
*/
?>
<?php 
$pemain = [
            "Cristiano Ronaldo" => "Juventus", 
            "Lionel Messi" => "Barcelona",
            "Luca Modric" => "Real Madrid",
            "Mohammad Salah" => "Liverpool",
            "Neymar Jr" => "Paris Saint Germain",
            "Sadio Mane" => "Liverpool",
            "Zlatan Ibrahimovic" => "Ac Milan",
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>


    .container {
        font-family:arial;
        border:1px solid black;
        padding :20px;
        margin-right:50%;


    }

    th, td {
        padding :3px;
        text-align:left;
    }
    
    
    </style>
   
</head>
<body>

<div class="container">

    <h4>Daftar pemain bola terkenal dan clubnya</h4>
    <table>

        <?php foreach( $pemain as $player => $club) : ?>
        <tr>
        <td><b><?= "$player" ?></td>
        <td><?= "<b>:</b> $club" ?></td>
        </tr>
            

        <?php endforeach ?>

    </table>
</div>



    
</body>
</html>