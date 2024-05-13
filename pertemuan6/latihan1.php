<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            line-height: 50px;
            background-color: #BADA55;
            text-align: center;
            margin: 3px;
            display: inline-block;
            transition: 1s;
        }

        .kotak:hover {
            border-radius: 50%;
            transform: rotate(360deg);
        }
    </style>
</head>
<body>
    <?php $angka = [[1, 2, 3], [4, 5, 6], [7, 8, 9]];
    forEach($angka as $val) : 
        forEach($val as $num) :?>
        <div class="kotak"><?=$num;?></div>
    <?php endforeach;
        echo "<br/>";
    endforeach;  ?>
</body>
</html>