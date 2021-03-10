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
    <title>Latihan2a</title>
    <style>
        .style1 {
            width: 50%;
            margin: auto;
            border: 3px solid black;
            box-shadow: 0 0 15px #000;
            border-radius: 5px;
            margin-top: 50px;
        }

        .style2 {
            font-size: 28px;
            font-family: arial;
            color: #8c782d;
            font-style: italic;
            font-weight: bolder;
            margin-left: 30px;
        }
    </style>
</head>

<body>
        <?php
        function gantiStyle($tulisan, $style1 = "style1", $style2 = "style2") {
            return "<div class=$style1><p class=$style2>$tulisan</p></div>";

        }
        echo gantiStyle("Selamat Datang di Praktikum PW");
        ?>
</body>

</html>