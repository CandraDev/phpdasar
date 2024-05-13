<?php
    // Pengulangan
// for, while, do, foreach

// for($i = 0; $i < 10; $i++){
//     echo "Hello World: $i <br>";
// }

// $i = 0;
// while($i < 10){
//     echo "Hello World: $i <br>";
//     $i++;
// }

// $i = 0;
// do {
//     // if false, do this once
//     echo "Hello World: $i <br>";
//     $i++;

//     // if true, then do it again until become false
// } while ($i < 10);
// ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control Flow</title>
    <style>
        .warna {
            background-color: lightgray;
        }
    </style>
</head>
<body>
    <table border='1' cellpadding='10' cellspacing='0'>
       <?php for($i = 1; $i <= 5; $i++) : ?>
            <?php if($i % 2 == 1) : ?>
            <tr class='warna'>
            <?php else : ?>
            <tr> <?php endif; ?>
                <?php for($j = 1; $j <= 5; $j++) : ?>
                    <td><?= "$i, $j" ?></td>
                <?php endfor?>
            </tr>
        <?php endfor;?>
    </table>
</body>
</html>