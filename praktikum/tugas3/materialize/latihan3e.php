<?php
/*
Nama : MUSTOFA FIRDAUS
NRP : 203040029
Shift Praktikum : Rabu pukul 09:00
Tugas : Tugas 3 Praktikum Pemrograman Web
*/
?>
<?php  
$kendaraan = [
    [
         
        "gambar" => "crf.jpg",
        "nama" => "Honda CRF150L",
        "tahun" => "2020",
        "harga" => "USD 2.070 (OTR Jakarta)",
    ],
    [
        
        "gambar" => "cbr.jpg",
        "nama" => "Honda CBR150R",
        "tahun" => "2021",
        "harga" => "USD 2.449,5 (OTR Jakarta)",

   
    ],
    [

        
        "gambar" => "beat.jpg",
        "nama" => "Honda Beat Street",
        "tahun" => "2021",
        "harga" => "USD 1.173 (OTR Jakarta)",

    ],
    [

       
        "gambar" => "genio.jpg",
        "nama" => "Honda Genio",
        "tahun" => "2020",
        "harga" => "USD 1.309,62 (OTR Jakarta)",

    ],
    [

        
        "gambar" => "adv.png",
        "nama" => "Honda ADV 150",
        "tahun" => "2020",
        "harga" => "USD 2.070 (OTR Jakarta)",

    ],
   [

        "gambar" => "cb.png",
        "nama" => "Honda CB150R",
        "tahun" => "2020",
        "harga" => "USD 1.976,85 (OTR Jakarta)",


   ],
   [

        "gambar" => "cbr25.jpg",
        "nama" => "Honda CBR250RR",
        "tahun" => "2021",
        "harga" => "USD 4.657,5 (OTR Jakarta)",



   ],
   [

        "gambar" => "supra.png",
        "nama" => "Honda Supra X 125 FI",
        "tahun" => "2018",
        "harga" => "USD 1.264,08 (OTR Jakarta)",


    ],
    [

        "gambar" => "sonic.png",
        "nama" => "Honda Sonic 150R",
        "tahun" => "2019",
        "harga" => "USD 1.976,85 (OTR Jakarta)",


   ],
   [

        "gambar" => "pcx.jpeg",
        "nama" => "Honda PCX eHEV",
        "tahun" => "2020",
        "harga" => "USD 3.147,78 (OTR Jakarta)",


    ],
];
?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

    <body>
    <table class="highlight">
        <thead>
          <tr>
              <th>No</th>
              <th>PICTURE</th>
              <th>NAMA PRODUK</th>
              <th>TAHUN DIBUAT</th>
              <th>HARGA</th>
          </tr>
        </thead>

        <tbody>
        <?php $i = 1 ; ?>
        <?php foreach ($kendaraan as $motor) :  ?>

        <tr>
        <td><?php echo $i  ?></td>
        <td align="center"><?php echo "<img src='img/$motor[gambar]' width='110' height='100' />";?></td>
        <td><?php echo $motor["nama"]  ?></td>
        <td><?php echo $motor["tahun"] ?></td>
        <td><?php echo $motor["harga"]  ?></td>

        </tr>

        <?php $i++; ?> 
        <?php endforeach  ?>
          
        
        </tbody>
      </table>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>