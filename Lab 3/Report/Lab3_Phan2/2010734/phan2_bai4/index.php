<?php
// Define variable to check error
$nameErr = $descriptionErr = $priceErr = $imageErr = "";
$conn = mysqli_connect('localhost', 'root', '', 'shop');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Home Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            td {
                text-align: justify;
            }

            th, #imageCell {
                text-align: center;
            }
            .custom {
                border: 2px solid black;
                padding: 20px;
            }

            .error {
                color: red;
            }
            
            .Footer
            {
                align-items: center;
                text-align: center;
            }

            input, textarea {
                border: 2px solid black;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    </head>

    <body class="d-flex h-100">
        <div class="container d-flex w-100 h-100 m-0 mx-auto flex-column">
            <nav class="navbar navbar-expand-lg navbar-light text-dark mb-4" style="background-color: aliceblue">
                <div class="container my-2 px-4 px-lg-5" text-center>
                    <a class="navbar-brand fs-3 fw-semibold" href="#!">PHONG VŨ COMPUTER</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-lg-0 mx-auto">
                            <li class="nav-item"><a class="nav-link active fw-semibold" aria-current="page" href="index.php">Products</a> </li>
                            <li class="nav-item"><a class="nav-link" href="../../phan2_bai2/list.php">Home</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Table -->
            <main class="container my-3 px-3">
                <div class="container px-3 py-3 mx-2 my-2" id="load-data">
            </main>

            <!-- Form -->
            <div class="container custom  my-3">
                <h2 class="fs-3 fw-semibold">CREATE A NEW PRODUCT FORM</h2>
                <form method="post" class="row g-3" id="insert-data">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" class="form-control" value="" name="name" placeholder="Name of product" style="border: 2px solid black">
                        <span class="error">* <p class="text-danger help-block"></p> </span>
                    </div>

                    <div class="col-md-6">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" id="price" class="form-control" value="" name="price" placeholder="Currency unit: VND" style="border: 2px solid black">
                        <span class="error">* <p class="text-danger help-block"></p> </span>
                    </div>

                    <div>
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" id="description" class="form-control" value="" name="description" placeholder="About product..." style="height: 100px; border: 2px solid black"></textarea>
                        <span class="error"> <p class="text-danger help-block"></p> </span>
                    </div>

                    <div>
                        <label for="image" class="form-label">Image</label>
                        <input type="text" id="image" class="form-control" value="" name="image" placeholder="Your link image" style="border: 2px solid black">
                        <span class="error"> <p class="text-danger help-block"></p> </span>
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-outline-primary" id="button-insert" style="height: 50px; width: 100px">Insert</button>
                    </div>
    
                    <div class="col-md-6">
                        <button type="reset" class="btn btn-outline-danger" style="height: 50px; width: 100px">Reset</button>
                    </div> 
                </form>
            </div>             
        
            <!-- Footer -->
            <footer class="py-5" style="background-color: aliceblue">
                <div class="Footer">
                    <p class="m-1 px-4 px-lg-5 ">Footer information</p>
                    <p class="m-1 px-4 px-lg-5">
                        <a href="#!" class="text-decoration-none">Link 1</a>|
                        <a href="#!" class="text-decoration-none">Link 2</a>|
                        <a href="#!" class="text-decoration-none">Link 3</a>
                    </p>
                </div>
            </footer>   
         
        </div>

        <script src="ajax.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>

</html>