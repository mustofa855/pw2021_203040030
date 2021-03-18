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
    [
        "nama" => "Cristiano Ronaldo", 
        "club" => "Juventus",
        "main" => "100",
        "gol" => "76",
        "assist" => "30",
    ],
    [
        "nama" => "Lionel Messi", 
        "club" => "Barcelona",
        "main" => "120",
        "gol" => "80",
        "assist" => "12",
   
    ],
    [
        "nama" => "Luca Modric", 
        "club" => "Real Madrid",
        "main" => "87",
        "gol" => "12",
        "assist" => "48",
    ],
    [
        "nama" => "Mohammad Salah", 
        "club" => "Liverpool",
        "main" => "90",
        "gol" => "103",
        "assist" => "8",
    ],
    [
        "nama" => "Neymar Jr", 
        "club" => "Paris Saint Germain",
        "main" => "109",
        "gol" => "56",
        "assist" => "15",
    ],
   [
        "nama" => "Sadio Mane", 
        "club" => "Liverpool",
        "main" => "63",
        "gol" => "30",
        "assist" => "70",
   ],
   [
    "nama" => "Zlatan Ibrahimovic", 
    "club" => "Ac Milan",
    "main" => "100",
    "gol" => "10",
    "assist" => "12"
   ]
];

$total_main = 0;
$total_gol = 0;
$total_assist = 0;
 
foreach ($pemain as $item => $value) {
    $total_main += $value['main'];
    $total_gol += $value['gol'];
    $total_assist += $value['assist'];


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
        table, th, td {
        
        border:1px solid black;
        border-collapse:collapse;
    }
    th, td {
        padding :5px;
        text-align:left;
        font-family: Arial;
    }
    </style>
</head>
<body>
    
<table>
    <tr>
    <th>NO</th>
    <th>NAMA</th>
    <th>CLUB</th>
    <th>MAIN</th>
    <th>GOL</th>
    <th>ASSIST</th>
    
    </tr>

    <?php $i = 1 ; ?>
    <?php foreach ($pemain as $player) :  ?>

    <tr>
    <td><?php echo $i  ?></td>
    <td><?php echo $player["nama"] ?></td>
    <td><?php echo $player["club"]  ?></td>
    <td><?php echo $player["main"] ?></td>
    <td><?php echo $player["gol"]  ?></td>
    <td><?php echo $player["assist"] ?></td> 

    </tr>

        <?php $i++; ?> 
    <?php endforeach  ?>

    <tr>
    <th>#</th>
    <th colspan="2"><center>Jumlah</center></th>
    <th><?php echo $total_main   ?></th>
    <th><?php echo $total_gol ?></th>
    <th><?php echo $total_assist ?></th>
    
    
    </tr>


</table>



</body>
</html>