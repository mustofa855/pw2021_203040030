<?php 
// fungsi untuk memlakukan koneksi ke database

function koneksi() 
{
    $conn = mysqli_connect("localhost", "root", "" , "pw_tubes_203040030");
    

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



?>