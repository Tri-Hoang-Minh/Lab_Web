<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Phan 2 - Bai 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body class="container">
    <div class="header mb-2 shadow sticky-top">
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
                <a class="navbar-brand px-5" href="#">
                    Phong Vũ Computer
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="#">Categories
                                <span class="text-black ps-3"> |</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="#">Contact us
                                <span class="text-black ps-3"> |</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-primary" href="#">Follow us</a>
                        </li>

                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
            </div>
        </nav>
    </div>
    <hr class="my-1">
    <div class="row my-2">
        <div class="side-bar-l col-md-2 col-12">
            <div class="card mb-2">
                <div class="card-header">
                    Category
                </div>
                <!-- Write query database in here. -->
                <ul class="list-group list-group-flush">
                    <?php
                    require_once('connection.php');
                    $conn = OpenCon();
                    $querry = "SELECT * FROM `products`;";
                    $result = $conn->query($querry);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<li class='list-group-item'>" . $row["name"] . "</li>";
                        }
                    }
                    ?>
                </ul>

            </div>
            <div class="card">
                <div class="card-header">
                    Top Products
                </div>
                <!-- Write query database in here -->
                <ul class="list-group list-group-flush">
                    <?php
                    require_once('connection.php');
                    $conn = OpenCon();
                    $querry = "SELECT * FROM `products`;";
                    $result = $conn->query($querry);
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            echo "<li class='list-group-item'>" . $row["name"] . "</li>";
                        }
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="main-content col-md-8 col-12">
            <h1 class="mb-3">Top Products</h1>
            <div class="row text text-center mb-4">
                <!-- Write querry data in datbase in here -->
                <?php
                require_once('connection.php');
                $conn = OpenCon();
                $querry = "SELECT * FROM `products`;";
                $result = $conn->query($querry);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<div class='col-md-4'>";
                        echo "<div class='card'>";
                        echo "<img src='" . $row["image"] . "'class='card-img-top p-1' alt='picture' />";
                        echo "<div class='card-body'>";
                        echo "<h5 class='card-title'>" . $row["name"] . "</h5>";
                        echo "<h6 class='card-title'> $" . $row["price"] . "</h6>";
                ?>
                        <a href="detail.php?id=<?php echo $row["id"] ?>" class="btn btn-primary">Bye Now </a>
                <?php

                        echo "</div>";
                        echo "</div>";
                        echo "</div>";
                    }
                }
                ?>
            </div>
            <nav aria-label="Page navigation example" class="float-end pt-3">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">1</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">2</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">3</a></li>
                    <li class="page-item disabled"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
        </div>
        <div class="col-md-2 col-12  ">
            <img src="Images/thump2.jpg" alt="thumbnail" width="180" height="800">
        </div>
    </div>
    <hr class="my-1">
    <div class="footer text-center">
        <p>Footer Information ...</p>
        <p class="d-inline-flex">
            <a href="https://phongvu.vn/" class="nav-link text-primary px-2">Link 1</a>|
            <a href="https://phongvu.vn/" class="nav-link text-black px-2">Link 2</a>|
            <a href="https://phongvu.vn/" class="nav-link text-primary px-2">Link 3</a>
        </p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>