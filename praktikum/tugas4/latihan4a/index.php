<?php
/*
Nama : MUSTOFA FIRDAUS
NRP : 203040029
Shift Praktikum : Rabu pukul 09:00
Tugas : Tugas 4 Praktikum Pemrograman Web
*/
?>
<?php  
$conn = mysqli_connect ("localhost","root", "");



mysqli_select_db($conn, "pw2021_tubes_203040030");

$result = mysqli_query($conn,"SELECT * FROM kendaraan");
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
        <?php while($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
            <td><?php echo $i  ?></td>
            <td><?php echo "<img src='assets/img/$row[img]' width='110' height='100'  />";?></td>
            <td><?php echo $row["nama"]  ?></td>
            <td><?php echo $row["tahun_dibuat"] ?></td>
            <td><?php echo $row["harga"]  ?></td>
            </tr>

        <?php $i++; ?> 
        <?php endwhile;  ?>
          
        
        </tbody>
      </table>
      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>


<!-- <td><img src="assets/img/ $row[img]; </td> -->