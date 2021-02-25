<?php
/*
Mustofa Firdaus
203040030
https://github.com/mustofa855/pw2021_203040030
Pertemuan 5 - 25 Februari 2021
Mempelajari mengenai sintaks PHP tentang Membuat Array Dan menampilkan Array
*/
?>

<?php
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// Pasangan key dan value
// key-nya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arrl = [123, "tulisan", false];

// Menampilkan Array
// var_dump() / print_r()
// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen pada array
// echo $arrl[0];
// echo "<br>";
// echo $bulan[1];

// Menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "kamis";
echo "<br>";
var_dump($hari);









?>