<?php
$mahasiswa = [
    ["Candra Setiawan", "00812323", "Teknik Informatika", "candrasetiadev@gmail.com"],
    ["Deden Suharto", "0023123", "Teknik Sipil", "legendabirjon@gmail.com"]
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
        <li>Nama : <?=$mhs[0];?></li>
        <li>NIM : <?=$mhs[1];?></li>
        <li>Jurusan : <?=$mhs[2];?></li>
        <li>Email : <?=$mhs[3];?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>