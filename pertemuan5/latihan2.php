<?php
// Pengulangan pada array
// for / forEach

$angka = [3, 4, 2, 5, 6];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        div {
            display: inline-block;
            margin: 5px;
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
        }
    </style>
</head>
<body>
    <?php forEach($angka as $num):?>
        <div><?=$num?></div>
    <?php endforeach;?>
</body>
</html>