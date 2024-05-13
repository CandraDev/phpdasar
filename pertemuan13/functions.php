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

    // if(empty($title) == 1 || empty($year) == 1 || empty($genre) == 1 ||
    //     empty($runtime) == 1 || empty($poster) == 1) {
    //         echo "<script>
    //             alert('ERR: Make sure all of the datas was fully assigned!);
    //         </script>";
    //         header('Location: add.php');
    //         die();
    //     }

    $poster = upload();
    if( !$poster ){
        return false;
    }

    $query = "INSERT INTO movies 
        VALUES
        ('', '$title', $year, '$genre', '$runtime', '$poster')";

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
    $oldPoster = htmlspecialchars($data['oldPoster']);
    
    if($_FILES['poster']['error'] === 4){
        $poster = $oldPoster;
    } else {
        $poster = upload();
    }
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

function upload() {
    $fileName = $_FILES['poster']['name'];
    $fileSize = $_FILES['poster']['size'];
    $error = $_FILES['poster']['error'];
    $tmpName = $_FILES['poster']['tmp_name'];
    
    if( $error === 4 ){
        echo "<script>
            alert('Choose a file first!');
            </script>";
    }
    $validExtension = ['jpg', 'jpeg', 'png'];
    $fileExtension = strtolower(end(explode(".", $fileName)));
    if(!in_array($fileExtension, $validExtension)){
        echo "<script>
        alert('Choosen file is not a picture!');
        </script>";
        return false;
    }
    if($fileSize > 1000000){
        echo "<script>
        alert('Choosen file is too big!');
        </script>";
        return false;
    }
    $newFileName = uniqid() . "." . $fileExtension;
    move_uploaded_file($tmpName, 'img/' . $newFileName);
    return $newFileName;
}

function searchMov($keyword) {
    $query = "SELECT * FROM movies WHERE title LIKE '%$keyword%'
                OR year LIKE '%$keyword%' 
                OR genre LIKE '%$keyword%'";
    return query($query);
}

?>