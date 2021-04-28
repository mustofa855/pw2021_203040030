<?php
/*
Mustofa Firdaus
203040030
https://github.com/mustofa855/pw2021_203040030
Pertemuan 6 - 28 Februari 2021
Mempelajari mengenai sintaks PHP tentang Array Associative
*/
?>
<?php
/*
$mahasiswa = [
    ["Mustofa Firdaus", "203040030",
 "203040030@mail.unpas.ac.id", "Teknik Informatika"],
    ["Doddy ferdiansyah", "033040001",
 "doddy0@gmail.com", "Teknik Industri"]

];
*/
// Array Associative
// Definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Mustofa Firdaus", 
        "nrp" => "203040030",
        "email" => "203040030@mail.unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "profil.jpg"
    ],
    [
        "nama" => "Ade Hasanudin", 
        "nrp" => "033040001",
        "email" => "ade123@gmail.com",
        "jurusan" => "Teknik Industri",
        "tugas" => [90, 88, 100],
        "gambar" => "images.png"
    ],
    [
        "nama" => "Rizki Fahreza", 
        "nrp" => "19902001",
        "email" => "rizkiii@gmail.com",
        "jurusan" => "Teknik Mesin",
        "tugas" => [90, 88, 100],
        "gambar" => "images.png"
    ],
    [
        "nama" => "Gilang Zaenudin", 
        "nrp" => "188090021",
        "email" => "glgzae321@gmail.com",
        "jurusan" => "Teknik elektro",
        "tugas" => [98, 88, 90],
        "gambar" => "images.png"
    ],
    [
        "nama" => "Silvia Saputri", 
        "nrp" => "177040021",
        "email" => "silputri@gmail.com",
        "jurusan" => "Teknik PWK",
        "tugas" => [92, 84, 87],
        "gambar" => "images.png"
    ]
];
// echo $mahasiswa[1]["email"];
// echo $mahasiswa[1]["jurusan"];
// echo $mahasiswa[1]["tugas"][1];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li>
        <img src="img/<?= $mhs["gambar"]; ?>">
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP :<?= $mhs["nrp"]; ?></li>
        <li>Jurusan :<?= $mhs["jurusan"]; ?></li>
        <li>Email :<?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
        
</body>
</html>