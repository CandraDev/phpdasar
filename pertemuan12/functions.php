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

function deleteMov($id){
    global $conn;
    $query = "DELETE FROM movies WHERE `movies`.`id` = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function addMov($data){
    global $conn;
    $title = htmlspecialchars($data['title']);
    $year = htmlspecialchars($data['year']);
    $genre = htmlspecialchars($data['genre']);
    $runtime = htmlspecialchars($data['runtime']);
    $poster = htmlspecialchars($data['poster']);

    // if(empty($title) == 1 || empty($year) == 1 || empty($genre) == 1 ||
    //     empty($runtime) == 1 || empty($poster) == 1) {
    //         echo "<script>
    //             alert('ERR: Make sure all of the datas was fully assigned!);
    //         </script>";
    //         header('Location: add.php');
    //         die();
    //     }

    $query = "INSERT INTO movies 
        VALUES
        ('', '$title', $year, '$genre', '$runtime', '$poster')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function searchMov($keyword) {
    $query = "SELECT * FROM movies WHERE title LIKE '%$keyword%'
                OR year LIKE '%$keyword%' 
                OR genre LIKE '%$keyword%'";
    return query($query);
}

?>