<?php
// connect to database
require 'functions.php';
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

$movies = query("SELECT * FROM `movies`");

// if searchbutton clicked...
if(isset($_POST['search'])){
    $movies = searchMov($_POST["keywords"]); 
}

    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title>My Movies List</title>
    </head>
    <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-danger">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">My Movies List</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Link
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Link</a>
                    </li>

                </ul>
                <form action="" method="post" class="d-flex">
                    <a class="btn btn-warning me-2" href="logout.php">Logout</a>
                    <input name="keywords" class="form-control me-2" type="text" placeholder="Search" aria-label="Search">
                    <button name="search" class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <main class="container-fluid  bg-dark pt-5 pb-5">
        <div class="container pt-5">
                <div class="row row-cols-2">
                <?php $i = 1; foreach($movies as $mov) :?>
                    <div class="col">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                <img src="img/<?=$mov['poster'];?>" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title"><?=$mov['title'];?> (<?=$mov['year'];?>)</h5>
                                    <p class="card-text"><?=$mov['genre'];?></p>
                                    <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                    <p class="card-text"><small class="text-muted"><?=$mov['runtime'];?></small></p>
                                    <div class="row">
                                        <div class="col-6">
                                            <a href="update.php?id=<?=$mov['id'];?>" class="btn btn-success">Update  </a>
                                        </div>
                                        <div class="col-6">
                                            <a href="delete.php?id=<?=$mov['id'];?>" class="btn btn-danger">Delete</a>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>
                </div>
        </div>
    </main>
    <section class="container-fluid  bg-dark" style="padding-bottom: 10rem;">
            
    </section>
    <footer class="container-fluid bg-danger text-light text-center p-1">
            <h1 class="h3">Made with PHP</h1>
    </footer>
</body>
</html>