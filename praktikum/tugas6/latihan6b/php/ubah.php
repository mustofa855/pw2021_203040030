<?php
require 'function.php';

$id = $_GET['id'];
$t_hoddie = query("SELECT * FROM kendaraan WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil diubah!');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                    alert('Data Gagal diubah!');
                    document.location.href = 'admin.php';
                </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan5d</title>
</head>

<body>
    <div class="container">

        <h3>Form Ubah Data kendaraan</h3>

        <form action="" method="POST">
            <ul>
                <li>
                    <label for="nama">Nama/Merk :</label><br>
                    <input type="text" name="nama" id="nama" required><br><br>
                </li>
                <li>
                    <label for="img">Picture :</label><br>
                    <input type="file" name="img" id="img"><br><br>
                </li>
                <li>
                    <label for="tahun_dibuat">tahun_dibuat :</label><br>
                    <input type="date" name="tahun_dibuat" id="tahun_diatas" required><br><br>
                </li>
                <li>
                    <label for="harga">Harga :</label><br>
                    <input type="text" name="harga" id="harga" required><br><br>
                </li>
                
                <br>
                <button type="submit" name="tambah">Tambah Data !</button>
                <button type="submit">
                    <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
                </button>
            </ul>
        </form>
    </div>

</body>

</html>