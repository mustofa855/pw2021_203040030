<?php 
session_start();

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

// jika tidak ada id di url
if(!isset($_GET['id'])) {
    header("Location: admin.php");
    exit;
}

// Mengambil id dari url
$id  = $_GET['id'];

if(hapus($id) > 0) {
    echo "<script>
        alert('Data Berhasil Dihapus');
        document.location.href = 'admin.php';
    </script>";
}else{
    echo "<script>
        alert('Data Gagal dihapus');
        document.location.href = 'admin.php';
    </script>";
}

?>