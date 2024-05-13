<?php
    $movies = [
        [
            "title" => "Agak Laen",
            "year" => "2024",
            "genre" => "Comedy",
            "runtime"=>"119 min",
            "poster"=>"https://m.media-amazon.com/images/M/MV5BMjViNTVhY2QtZjE1OS00OWIyLTkyM2EtNmYwOTA0ZTdkZDRmXkEyXkFqcGdeQXVyNzEzNjU1NDg@._V1_SX300.jpg"
        ],
        [
            "title" => "Dilan 1990",
            "year" => "2018",
            "genre" => "Drama, Romance",
            "runtime"=>"110 min",
            "poster"=>"https://m.media-amazon.com/images/M/MV5BYzM0NmQ2YzgtZWZkNC00N2JhLThjYzUtMDNlZDczMzJiMGY1XkEyXkFqcGdeQXVyNzkzODk2Mzc@._V1_SX300.jpg"
        ],
        [
            "title" => "Nussa: The Movie",
            "year" => "2021",
            "genre" => "Animation, Adventure, Comedy",
            "runtime"=>"107 min",
            "poster"=>"https://m.media-amazon.com/images/M/MV5BZWZiODkxNjgtYmQ2OS00YmNlLThhZDMtMzNiN2Q5OGYzMzE2XkEyXkFqcGdeQXVyMTEzMTI1Mjk3._V1_SX300.jpg"
        ],
        [
            "title" => "Si Juki the Movie: Panitia Hari Akhir",
            "year" => "2017",
            "genre" => "Animation, Adventure, Comedy",
            "runtime"=>"110 min",
            "poster"=>"https://m.media-amazon.com/images/M/MV5BOGZkMzIwOWQtNjY3NC00ZDQ5LTk2YjQtNDMxZjFjNjY4YmMyXkEyXkFqcGdeQXVyNjcyODMyNTM@._V1_SX300.jpg"
        ],
        [
            "title" => "Warkop DKI Reborn: Jangkrik Boss Part 1",
            "year" => "2016",
            "genre" => "Adventure, Comedy",
            "runtime"=>"95 min",
            "poster"=>"https://m.media-amazon.com/images/M/MV5BZjYwMGM0NGMtOTM4Zi00OTNhLTgwZTItNzYwMzc5YzE4ZjJhXkEyXkFqcGdeQXVyNjIwMTgzMTg@._V1_SX300.jpg"
        ],
        [
            "title" => "Your Name.",
            "year" => "2016",
            "genre" => "Animation, Drama, Fantasy",
            "runtime"=>"106 min",
            "poster"=>"https://m.media-amazon.com/images/M/MV5BODRmZDVmNzUtZDA4ZC00NjhkLWI2M2UtN2M0ZDIzNDcxYThjL2ltYWdlXkEyXkFqcGdeQXVyNTk0MzMzODA@._V1_SX300.jpg"
        ],
        [
            "title" => "Weathering with You",
            "year" => "2019",
            "genre" => "Animation, Drama, Fantasy",
            "runtime"=>"112 min",
            "poster"=>"https://m.media-amazon.com/images/M/MV5BNzE4ZDEzOGUtYWFjNC00ODczLTljOGQtZGNjNzhjNjdjNjgzXkEyXkFqcGdeQXVyNzE5ODMwNzI@._V1_SX300.jpg"
        ],
        [
            "title" => "Suzume",
            "year" => "2022",
            "genre" => "Animation, Action, Adventure",
            "runtime"=>"122 min",
            "poster"=>"https://m.media-amazon.com/images/M/MV5BNGVkNDc3NjUtNTY5ZS00ZmE0LWE3YzctMDk2OTRlNTdiZWQwXkEyXkFqcGdeQXVyMTU3NDg0OTgx._V1_SX300.jpg"
        ],
        [
            "title" => "A Silent Voice: The Movie",
            "year" => "2016",
            "genre" => "Animation, Drama",
            "runtime"=>"130 min",
            "poster"=>"https://m.media-amazon.com/images/M/MV5BZGRkOGMxYTUtZTBhYS00NzI3LWEzMDQtOWRhMmNjNjJjMzM4XkEyXkFqcGdeQXVyMTMxODk2OTU@._V1_SX300.jpg"
        ],
        [
            "title" => "I Want to Eat Your Pancreas",
            "year" => "2018",
            "genre" => "Animation, Drama, Family",
            "runtime"=>"109 min",
            "poster"=>"https://m.media-amazon.com/images/M/MV5BNDM4MWE3NGQtODlkYS00NWU5LTg3ZjMtMTEyNjljOWI4NWIxXkEyXkFqcGdeQXVyNzkzODk2Mzc@._V1_SX300.jpg"
        ],
    ]
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
        <?php foreach($movies as $mov) : ?>
            <li><img src="<?=$mov["poster"];?>" alt="" width="100"></li>
            <li>Title: <?=$mov["title"];?></li>
            <li>Year: <?=$mov["year"];?></li>
            <li>Genre: <?=$mov["genre"];?></li>
            <li>Runtime: <?=$mov["runtime"];?></li>
            <br>
        <?php endforeach; ?>
    </ul>
</body>
</html>