<?php
// connect to database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// select all data from movies table
$result = mysqli_query($conn, "SELECT * FROM movies");

// check if error
if(!$result) {
    echo mysqli_error($conn);
}

// fetch data from result
    //mysqli_fetch_row() // returns numeric array
    //mysqli_fetch_assoc() // returns assoc array
    //mysqli_fetch_array() // returns both, but doubled the data
    //mysqli_fetch_object() // returns object

// while($movie = mysqli_fetch_assoc($result)){
//     var_dump($movie);
//     };
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Halaman Admin</title>
    </head>
    <body>
        <h1>Daftar Film</h1>
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
        <?php $i = 1; while($row = mysqli_fetch_assoc($result)) :?>
            <tr>
                <td><?=$i++;?></td>
                <td><a href="">Update</a> | <a href="">Delete</a></td>
                <td><img src="<?=$row["poster"];?>" width="100"   alt="poster"></td>
                <td><?=$row["title"];?></td>
                <td><?=$row["year"];?></td>
                <td><?=$row["genre"];?></td>
                <td><?=$row["runtime"];?></td>
            </tr>
        <?php endwhile;?>
    </table>
</body>
</html>