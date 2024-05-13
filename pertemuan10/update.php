<?php

    require 'functions.php';

    $id = $_GET['id'];

    $mov = query("SELECT * FROM `movies` WHERE id = $id")[0];

    if(isset($_POST["submit"])){
        if( updateMov($_POST) > 0 ) {
            echo "
                <script>
                    alert('Movie has successfully updated!');
                    document.location.href = 'index.php';
                </script>
                ";
        } else {
            echo "
                <script>
                    alert('Data has failed to be updated!');
                    document.location.href = 'index.php';
                </script>
                ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Movie | Movies database</title>
</head>
<body>
    <h1>Update a Movie</h1>
    <form action="" method="post">
            <ul>
                <input type="hidden" name="id" value="<?=$mov['id'];?>">
                <li>
                    <label for="title">Title: </label>
                    <input type="text" name="title" required value="<?=$mov["title"];?>">
                </li>
                <li>
                    <label for="year">Year: </label>
                    <input type="number" name="year" required value="<?=$mov["year"];?>">
                </li>
                <li>
                    <label for="genre">Genre: </label>
                    <input type="text" name="genre"  required value="<?=$mov["genre"];?>">
                </li>
                <li>
                    <label for="runtime">Runtime: </label>
                    <input type="text" name="runtime" required value="<?=$mov["runtime"];?>">
                </li>
                <li>
                    <label for="poster">Poster: </label>
                    <input type="text" name="poster" required value="<?=$mov["poster"];?>">
                </li>
                <li>
                    <button type="submit" name="submit">Update Movie</button>
                </li>
            </ul>
    </form>
</body>
</html>