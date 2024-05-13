<?php
// connect to database
require 'functions.php';
$movies = query("SELECT * FROM `movies`");
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Page</title>
    </head>
    <body>
        <h1>Movies List</h1>
        <a href="add.php">Add movie data...</a>
        <br/> <br/>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Action</th>
            <th>Poster</th>
            <th>Title</th>
            <th>Year</th>
            <th>Genre</th>
            <th>Runtime</th>
        </tr>
        <?php $i = 1; foreach($movies as $mov) :?>
            <tr>
                <td><?=$i++;?></td>
                <td><a href="">Update</a> | <a href="delete.php?id=<?=$mov['id'];?>" onclick="return confirm('Yakin?');">Delete</a></td>
                <td><img src="<?=$mov["poster"];?>" width="100"   alt="poster"></td>
                <td><?=$mov["title"];?></td>
                <td><?=$mov["year"];?></td>
                <td><?=$mov["genre"];?></td>
                <td><?=$mov["runtime"];?></td>
            </tr>
        <?php endforeach;?>
    </table>
</body>
</html>