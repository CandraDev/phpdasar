<?php
// connect to database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($querry){
    global $conn;
    $result = mysqli_query($conn, $querry);
    $rows = [];
    while($row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }
    return $rows;
}

function addMov($data){
    global $conn;
    $title = htmlspecialchars($data['title']);
    $year = htmlspecialchars($data['year']);
    $genre = htmlspecialchars($data['genre']);
    $runtime = htmlspecialchars($data['runtime']);
    $poster = htmlspecialchars($data['poster']);

    $query = "INSERT INTO movies 
        VALUES
        ('', '$title', $year, '$genre', '$runtime', '$poster')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function deleteMov($id){
    global $conn;
    $query = "DELETE FROM movies WHERE `movies`.`id` = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function updateMov($data){
    global $conn;
    $id = $data['id'];
    $title = htmlspecialchars($data['title']);
    $year = htmlspecialchars($data['year']);
    $genre = htmlspecialchars($data['genre']);
    $runtime = htmlspecialchars($data['runtime']);
    $poster = htmlspecialchars($data['poster']);

    $query = "UPDATE movies SET 
                title = '$title', 
                year = $year,
                genre = '$genre',
                runtime = '$runtime',
                poster = '$poster'
                WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
?>