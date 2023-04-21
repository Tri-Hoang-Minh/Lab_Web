<?php
// b) Insert a product to the database
$nameErr = $descriptionErr = $priceErr = $imageErr = "";
$conn = mysqli_connect('localhost', 'root', '', 'shop');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM products";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Add a product</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <style>
            .custom {
                border: 2px solid black;
                padding: 30px;
            }

            input, textarea {
                border: 2px solid black;
            }
            .FOOTER
            {
                text-align: center;
            }
            .error {
                color: red;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

    <body class="d-flex h-100">
        <div class="container d-flex w-100 h-100 m-0 mx-auto flex-column">
            <nav class="navbar navbar-expand-lg navbar-light text-dark mb-4" style="background-color: aliceblue">
                <div class="container my-2 px-4 px-lg-5" text-center>
                    <a class="navbar-brand fs-3 fw-semibold" href="#!">CREATE A NEW PRODUCT FORM</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-lg-0 mx-auto">
                            <li class="nav-item"><a class="nav-link active fw-semibold text-danger" aria-current="page" href="index.php">BACK</a> </li>
                            <li class="nav-item"><a class="nav-link" href="#!">Home</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="container custom  my-5">
                <form method="post" action="action_additems.php" class="row g-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" id="name" class="form-control" value="" name="name" placeholder="Name of product" style="border: 2px solid black">
                        <span class="error">* <?php echo $nameErr; ?> </span>
                    </div>

                    <div class="col-md-6">
                        <label for="price" class="form-label">Price</label>
                        <input type="text" id="price" class="form-control" value="" name="price" placeholder="Currency unit: VND" style="border: 2px solid black">
                        <span class="error">* <?php echo $priceErr; ?> </span>
                    </div>

                    <div>
                        <label for="description" class="form-label">Description</label>
                        <textarea type="text" id="description" class="form-control" value="" name="description" placeholder="About product..." style="height: 100px; border: 2px solid black"></textarea>
                        <span class="error"><?php echo $descriptionErr; ?> </span>
                    </div>

                    <div>
                        <label for="image" class="form-label">Image</label>
                        <input type="text" id="image" class="form-control" value="" name="image" placeholder="Your link image" style="border: 2px solid black">
                        <span class="error"><?php echo $imageErr; ?> </span>
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-outline-primary" style="height: 50px; width: 100px">Insert</button>
                    </div>
    
                    <div class="col-md-6">
                        <button type="reset" class="btn btn-outline-danger" style="height: 50px; width: 100px">Reset</button>
                    </div> 
                </form>
            </div> 

            <!-- Footer -->
            <footer class="py-5" style="background-color: #A2CDEE">
                <div class="FOOTER">
                    <p class="m-1 px-4 px-lg-5 ">Footer information</p>
                    <p class="m-1 px-4 px-lg-5">
                        <a href="#!" class="text-decoration-none">Link 1</a>|
                        <a href="#!" class="text-decoration-none">Link 2</a>|
                        <a href="#!" class="text-decoration-none">Link 3</a>
                    </p>
                </div>
            </footer>   
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>

</html>