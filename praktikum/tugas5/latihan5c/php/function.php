<?php 
// fungsi untuk memlakukan koneksi ke database

function koneksi() 
{
    $conn = mysqli_connect("localhost", "root", "" , "pw2021_tubes_203040030");
    

    return $conn;


}

// function untuk mealukan query dan memasukannya kedalam array

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
   return $rows; 
}

// fungsi untuk menambahkan data didalam database
function tambah($data)
{
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $tahun_dibuat = htmlspecialchars($data['tahun_dibuat']);
    $harga = htmlspecialchars($data['harga']);
    $img = htmlspecialchars($data['img']);

    $query = "INSERT INTO kendaraan
                    VALUES
                    ('', '$img','$nama','$tahun_dibuat','$harga')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


?>