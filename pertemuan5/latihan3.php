<?php
/*
Mustofa Firdaus
203040030
https://github.com/mustofa855/pw2021_203040030
Pertemuan 5 - 25 Februari 2021
Mempelajari mengenai sintaks PHP tentang menampilkan Array menggunakan looping serta membuat array multi dimensi 
*/
?>
<?php
$mahasiswa = [
    ["Mustofa Firdaus", "203040030", "Teknik Informatika", "203040030@mail.unpas.ac.id"],
    ["Mulyana", "203050031", "Teknik Mesin", "203050031@gmail.com"],
    ["Erik", "02340123", "Teknik Planologi", "erik@gmail.com"]
];

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


<?php foreach($mahasiswa as $mhs ) : ?>
<ul>
    <li>Nama : <?= $mhs[0]; ?></li>
    <li>NRP :<?= $mhs[1]; ?></li>
    <li>Jurusan :<?= $mhs[2]; ?></li>
    <li>Email :<?= $mhs[3]; ?></li>

</ul>
<?php endforeach; ?>











    
</body>
</html>







