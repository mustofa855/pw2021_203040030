<?php 

function koneksi()
{
    return mysqli_connect('localhost', 'root','', 'pw2021_tubes_203040030');
}

function query($query)
{
    $conn = koneksi();
    $result = mysqli_query($conn, $query);

    // JIka hasilnya hanya 1 data
    if(mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}
function upload()
{
    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    // Ketika tidak ada gambar yang dipilih
    if($error == 4) {
        // echo "<script>
        //     alert('Pilih Gambar Terlebih dahulu!');
        // </script>";
        return '../assets/img/nophoto.png';
    }

    // cek ekstensi file
    $daftar_gambar =  ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));
    // if(!in_array($ekstensi_file, $daftar_gambar)) {
    //     echo "<script>
    //         alert('Yang anda pilih bukan gambar!');
    //     </script>";
    //     return false;
    // }

    // Cek Type File
    if($tipe_file != 'image/jpeg' && $tipe_file != 'image/png'){
        echo "<script>
            alert('Yang Anda Pilih Bukan Gambar');
        </script>";
        return false;
    }

    // Cek Ukuran File
    // Maks 5MB == 5000000
    if($ukuran_file > 5000000) {
        echo "<script>
            alert('Ukuran Terlalu besar');
        </script>";
        return false;
    }

    // lolos pengecekan
    // siap upload
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

    return $nama_file_baru;
}

function tambah($data)
{
    $conn = koneksi();
    $id = $data['id'];
    $nama = htmlspecialchars($data['nama']);
    $tahun_dibuat = date ($data['tahun_dibuat']);
    $tipe_transmisi = htmlspecialchars($data['tipe_transmisi']);
    $tipe_mesin = htmlspecialchars($data['tipe_mesin']);
    $cc = htmlspecialchars($data['cc']);
    $harga = htmlspecialchars($data['harga']);

    // upload gambar
    $gambar = upload();
    if(!$gambar){
        return false;
    }

    $query = "INSERT INTO kendaraan
                VALUES
                (null, '$gambar', '$nama', '$tahun_dibuat', '$tipe_transmisi', '$tipe_mesin' ,'$cc','$harga');
                ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();

    // menghapus gambar di folder img
    $m = query("SELECT * FROM kendaraan WHERE id=$id");
    if($m['img'] != 'nophoto.png'){
        unlink('../assets/img/'.$m['img']);
    }
    

    mysqli_query($conn,"DELETE FROM kendaraan WHERE id =$id") or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();
    $id = $data['id'];
    $nama = htmlspecialchars($data['nama']);
    $tahun_dibuat = htmlspecialchars ($data['tahun_dibuat']);
    $tipe_transmisi = htmlspecialchars($data['tipe_transmisi']);
    $tipe_mesin = htmlspecialchars($data['tipe_mesin']);
    $gambar_lama = htmlspecialchars($data['gambar_lama']);

    $gambar = upload();
    if(!$gambar){
        return false;
    }

    if($gambar == '../assets/img/nophoto.png'){
        $gambar = $gambar_lama;
    }
    $query = "UPDATE kendaraan SET
                nama = '$nama',
                tahun_dibuat = '$tahun_dibuat',
                tipe_transmisi = '$tipe_transmisi',
                tipe_mesin = '$tipe_mesin',
                img = '$gambar'
                
                WHERE id = '$id'";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    
    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $conn = koneksi();

    $query = "SELECT * FROM kendaraan
                WHERE 
                nama LIKE '%$keyword%'";
    $result = mysqli_query($conn, $query);

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

function login($data)
{
    $conn = koneksi();

    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);

    // cek username 
    if($user = query("SELECT * FROM user WHERE username = '$username'")) {
        // cek password
        if(password_verify($password, $user['password'])){
            // Set Session
            $_SESSION['login'] = true;
            header("Location: admin.php");
            exit;
        }
       
    }
    return[
        'error' => true,
        'pesan' => 'Username / Password Salah!'
    ];
    

}

function registrasi($data)
{
    $conn = koneksi();

    $username = htmlspecialchars(strtolower($data['username']));
    $password1 = mysqli_real_escape_string($conn, $data['password1']);
    $password2 = mysqli_real_escape_string($conn, $data['password2']);

    // jika username / password kosong
    if(empty($username) || empty($password2) || empty($password2)) {
        echo "<script>
                alert('username / password tidak boleh kosong!');
                document.location.href = 'registrasi.php';
            </script>";

        return false;
    }

    // Jika username sudah ada
    if(query("SELECT * FROM user WHERE username = '$username'")) {
        echo "<script>
                alert('username Sudah terdaftar!');
                document.location.href = 'registrasi.php';
            </script>";
            
        return false;
    }

    // Jika konfirmasi password tidak sesuai
    if($password1 !== $password2) {
        echo "<script>
                alert('Konfirmasi password tidak sesuai!');
                document.location.href = 'registrasi.php';
            </script>";
    }

    // Jika password < 5 digit
    if(strlen($password1) < 5) {
        echo "<script>
                alert('Password terlalu pendek!');
                document.location.href = 'registrasi.php';
            </script>";
    }

    // Jika username dan password sudah sesuai
    // Enkripsi Password
    $password_baru = password_hash($password1, PASSWORD_DEFAULT);
    // INSERT KE TABEL USER
    $query = "INSERT INTO user
                VALUES
                (null, '$username', '$password_baru')
                ";
    mysqli_query($conn, $query) or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

?>