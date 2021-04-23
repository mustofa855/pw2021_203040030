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

// fungsi untuk menghapus data
function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM kendaraan WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();
    $id = htmlspecialchars($data['id']);
    $img = htmlspecialchars($data['img']);
    $nama = htmlspecialchars($data['nama']);
    $tahun_dibuat = htmlspecialchars($data['tahun_dibuat']);
    $harga = htmlspecialchars(['harga']);

    $query = "UPDATE kendaraan2
            SET
            img = '$img',
            nama = '$nama',
            tahun_dibuat = '$tahun_dibuat',
            harga = '$harga',
            WHERE id = '$id'
            ";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = 'username' ");
    if(mysqli_fetch_assoc($result)) {
        echo "<script>
            alert('username sudah digunakan');
        </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    //tambah user baru
    $query_tambah = "INSERT INTO user VALUES('', '$username', '$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
?>