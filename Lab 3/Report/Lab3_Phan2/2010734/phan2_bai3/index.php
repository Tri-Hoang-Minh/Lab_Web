<?php
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
        <title>Phong Vu Computer</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            td {
                text-align: justify;
            }

            th, #imageCell {
                text-align: center;
            }
            .FOOTER
            {
                text-align: center;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    </head>

    <body class="d-flex h-100">
        <div class="container d-flex w-100 h-100 m-0 mx-auto flex-column">
            <nav class="navbar navbar-expand-lg navbar-light text-dark mb-4" style="background-color: #00AFB9">
                <div class="container my-2 px-4 px-lg-5" text-center>
                    <a class="navbar-brand fs-3 fw-semibold" href="#!">PHONG VU COMPUTER</a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-lg-0 mx-auto">
                            <li class="nav-item"><a class="nav-link active fw-semibold" aria-current="page" href="index.php">Products</a> </li>
                            <li class="nav-item"><a class="nav-link" href="Lab3_Phan2/2010734/phan2_bai2/list.php">Home</a></li>
                            <li class="mx-2"> <a href="a.php"><button type="button" class="btn btn-outline-success">View</button></a> </li>  
                            <li class="mx-2"> <a href="b.php"><button type="button" class="btn btn-primary">Create a new product</button></a> </li>      
                        </ul>
                    </div>
                </div>
            </nav>
            <main class="container my-5 px-3">
                <table class="table table-bordered bordered-info table-striped" style="background-color: #BCFEFE">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>DESCRIPTION</th>
                            <th>PRICE</th>
                            <th>IMAGE</th>
                            <th>DELETE</th>
                            <th>EDIT</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php foreach ($result as $row): ?>
                        <tr>
                            <td>
                                <?php echo $row['id'] ?>
                            </td>
                            <td>
                                <?php echo $row['name'] ?>
                            </td>
                            <td>
                                <?php echo $row['description'] ?>
                            </td>
                            <td>
                                <?php echo $row['price'] ?>
                            </td>
                            <td id="imageCell"><img src="<?php echo $row['image'] ?>" height=100px /></td>
                            <td><a href="d.php?id=<?php echo $row['id']; ?>"><button type="button"
                                class="btn btn-outline-danger">Delete</button></a></td>
                            <td><a href="c.php?id=<?php echo $row['id']; ?>"><button type="button"
                                class="btn btn-outline-dark">Edit</button></a></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </main>
            <footer class="py-5" style="background-color: aliceblue">
                <div class="FOOTER">
                    <p class="m-1 px-4 px-lg-5 ">Footer information</p>
                    <p class="m-1 px-4 px-lg-5">
                        <a href="#" class="text-decoration-none">Link 1</a>|
                        <a href="#" class="text-decoration-none">Link 2</a>|
                        <a href="#" class="text-decoration-none">Link 3</a>
                    </p>
                </div>
            </footer>   
         
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>

</html>