<?php
/*
Nama : MUSTOFA FIRDAUS
NRP : 203040029
Shift Praktikum : Rabu pukul 09:00
Tugas : Tugas 2 Praktikum Pemrograman Web
*/
?>

<?php
    function tumpukanBola($tumpukan) {
        for( $tumpukan = 1; $tumpukan <= 5; $tumpukan++ ) : ?>
            <?php for( $j = 1; $j <= $tumpukan; $j++ ) : ?>
                <div class="bola"><?= $tumpukan ?></div>
            <?php endfor; ?>
            <br>
        <?php endfor;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .bola{
            background-color: salmon;
            height: 50px;
            width: 50px;
            line-height: 50px;
            text-align: center;
            margin-bottom: 3px;
            border-radius: 50px;
            display: inline-block;
            border: 3px solid black;
            font-weight: bold;
        }

    </style>
</head>
<body>
        <?php tumpukanBola(5) ?>
    
</body>
</html>