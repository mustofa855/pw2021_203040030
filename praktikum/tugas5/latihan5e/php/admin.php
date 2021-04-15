<?php 
require 'function.php';

if(isset($_GET['cari'])) {
  $keyword = $_GET['keyword'];
  $kendaraan = query("SELECT * FROM kendaraan WHERE
                      nama LIKE '%$keyword%' OR
                      tahun_dibuat LIKE '%$keyword%' OR
                      harga LIKE '%$keyword%' ");
}else {
  $kendaraan = query("SELECT * FROM kendaraan");
}

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

      
      <title>Latihan4b</title>

    </head>

    <body>

    <form action="" method="get">
      <input type="text" name = "keyword" autofocus>
      <button type="submit" name="cari">Cari!</button>
    </form>
    
    <button type="submit" name="tambah">Tambah Data !</button>

    <div class="highlight" >
            <table class="highlight">
                <thead>
                  <tr>
                  <th>No</th>
                  <th>PICTURE</th>
                  <th>NAMA PRODUK</th>
                  <th>TAHUN DIBUAT</th>
                  <th>HARGA(USD)</th>
                  </tr>
                </thead>

                <tbody>
                 <?php $i = 1 ; ?>
                 <?php foreach ($kendaraan as $motor) :  ?>
                        <tr>
                    
                            <td><?php echo $i ?></td>
                            <td>
                            <a href="hapus.php?id=<? $motor['id']?>" onclick="return confirm('Hapus Data??')">Hapus</a>
                            <a href="ubah.php?id=<? $motor['id']?>" onclick="return confirm('Ubah Data??')">UBAH</a>
                            </td>
                            <td><?php echo "<img src='assets/img/$motor[img]' width='110' height='100' />";?></td>
                            <td><?php echo $motor["nama"]; ?></td>
                            <td><?php echo $motor["tahun_dibuat"]; ?></td>
                            <td><?php echo $motor["harga"]; ?></td>
                        
                        </tr>
                <?php $i++; ?>       
                <?php endforeach;  ?>
                </tbody>


            </table>
      </div>
      <div class="hapus">
                  <a href="ubah.php?id=<? $motor['id']?>" onclick="return confirm('Ubah Data??')">UBAH</a>      
      </div>


      <!--JavaScript at end of body for optimized loading-->
      <script type="text/javascript" src="js/materialize.min.js"></script>
      
    </body>
  </html>