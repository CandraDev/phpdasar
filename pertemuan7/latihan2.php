<?php
// Check is there any undefined $_GET

if( !isset($_GET["title"]) ||
    !isset($_GET["year"]) ||
    !isset($_GET["genre"])||
    !isset($_GET['runtime']) ||
    !isset($_GET['poster'])
        ){
    // Redirect
    header("Location: latihan1.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMDB Lite</title>
</head>
<body>
    <h1>Movies Database</h1>
    <ul>
            <li><img src="<?=$_GET["poster"];?>" alt="" width="100"></li>
            <li>Title: <?=$_GET["title"];?></li>
            <li>Year: <?=$_GET["year"];?></li>
            <li>Genre: <?=$_GET["genre"];?></li>
            <li>Runtime: <?=$_GET["runtime"];?></li>
            <br>
            <a href="latihan1.php">Back to Main Menu</a>
    </ul>
</body>
</html>