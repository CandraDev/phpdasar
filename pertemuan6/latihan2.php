<?php
$mahasiswa = [
    [
        "nrp" => "022232333",
        "nama" => "Candra Setiawan",
        "email" => "candrasetiadev@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "candra.jpg"
    ],
    [
        "nama" => "Sandhika Galih",
        "nrp" => "00232313415",
        "email" => "sandhika@gmail.com",
        "jurusan" => "Teknik Manajemen",
        "gambar" => "sandhika.jpg"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php forEach($mahasiswa as $mhs):?>
    <br/>
    <ul>
        <li><img src='img/<?= $mhs["gambar"];?>'></li>
        <li>Nama : <?=$mhs["nama"];?></li>
        <li>NRP : <?=$mhs["nrp"];?></li>
        <li>Jurusan : <?=$mhs["jurusan"];?></li>
        <li>Email : <?=$mhs["email"];?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>