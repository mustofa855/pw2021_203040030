<?php
require 'function.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil ditambahkan!');
                    document.location.href = 'admin.php';
              </script>";
    } else {
        echo    "<script>
                    alert('Data Gagal ditambahkan!');
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
    <title>latihan5b</title>
</head>

<body>
    <h3>Form Tambah Data Mahasiswa</h3>
    <form action="" method="POST">
        <ul>
            <li>
                <label for="nama">Nama/Merk kendaraan :</label><br>
                <input type="text" name="nama" id="nama" required><br><br>
            </li>
            <li>
                <label for="img">Gambar :</label><br>
                <input type="file" name="img" id="img"><br><br>
            </li>
            <li>
                <label for="deskripsi">Deskripsi :</label><br>
                <input type="date" name="tahun_dibuat" id="tahun_dibuat" required><br><br>
            </li>
            
            <li>
                <label for="harga">Harga :</label><br>
                <input type="text" name="harga" id="nama" required><br><br>
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