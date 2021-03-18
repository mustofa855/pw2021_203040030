<?php
/*
Nama : MUSTOFA FIRDAUS
NRP : 203040029
Shift Praktikum : Rabu pukul 09:00
Tugas : Tugas 3 Praktikum Pemrograman Web
*/
?>
<?php
$pemain =[ "Mohammad Salah","Cristiano Ronaldo", "Lionel Messi", "Zlatan Ibrahimovic","Neymar Jr"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan3b</title>
    <style>
        .container1{
            font-family: arial;
            border: 1px solid black;
            padding: 20px;
            margin-right: 50%;
        }
        .container1 ol{
            padding-left: 80px;
        }
    
    </style>
</head>
<body>
<div class="container1">
    <h4>Daftar pemain bola terkenal</h4>
    <?php echo "<ol>
                <li> $pemain[0]</li>
                <li> $pemain[1]</li>
                <li> $pemain[2]</li>
                <li> $pemain[3]</li>
                <li> $pemain[4]</li>
                </ol>";

    ?>
    <h4>Daftar pemain bola terkenal baru</h4>
    <?php
        $pemain[5] = "Luca Modric";
        $pemain[6] = "Sadio Mane";

        echo "<ol>
              <li> $pemain[1]</li>
              <li> $pemain[2]</li>
              <li> $pemain[5]</li>
              <li> $pemain[0]</li>
              <li> $pemain[4]</li>
              <li> $pemain[6]</li>
              <li> $pemain[3]</li>
              </ol>";
    
    ?>
</div>

</body>
</html>
