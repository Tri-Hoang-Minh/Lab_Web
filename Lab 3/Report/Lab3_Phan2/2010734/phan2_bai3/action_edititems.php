<?php
$nameErr = $descriptionErr = $priceErr = $imageErr = "";
$name = $description = $price = $image = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (strlen($name) < 5 || strlen($name) > 40) {
            $nameErr = "Length of name must be between 5 and 40 characters";
        }
    }
    if (!empty($_POST["description"])) {
        $description = test_input($_POST["description"]);
        if (strlen($description) > 5000) {
            $descriptionErr = "Length of description must be less than 5000 characters";
        }
    }
    if (empty($_POST["price"])) {
        $priceErr = "Price is required";
    } else {
        $price = test_input($_POST["price"]);
        if (!filter_var($price, FILTER_VALIDATE_FLOAT) || $price < 0) {
            $priceErr = "Price must be a float and greater than 0";
        }
    }
    if (!empty($_POST["image"])) {
        $image = test_input($_POST["image"]);
        if (strlen($image) > 255) {
            $imageErr = "Length of the link image must be less or equal 255 characters";
        }
    }
}
if (isset($_POST['Update'])) {
    if ($nameErr === "" && $descriptionErr === "" && $priceErr === "" && $imageErr === "") {
        $id = $_GET['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
        $price = $_POST['price'];
        $image = $_POST['image'];

        // Connection
        $conn = mysqli_connect("localhost", "root", "", "shop");
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql = "UPDATE products SET name='$name', description='$description', price='$price', image='$image' WHERE id='$id'";
        if (mysqli_query($conn, $sql)) {
            echo "<h1 style='text-align: center; color: #98FB98'>THAO TÁC CHỈNH SỬA THÀNH CÔNG !</h1>";
            echo "<h2 style='text-align: center; '>Please wait to edit info items</h2>";
        } else {
            echo "<h1 style='text-align: center; color: red'>ERROR:";
        echo "<h2 style='text-align: center;'>Could not update product $sql. </h2>" . mysqli_error($conn);
        }
        mysqli_close($conn);
        header('Refresh: 4; URL=index.php');
    } else {
        mysqli_close($conn);
        echo '<h2 style="text-align: center; color: red">INVALID!</h2>';
        if (!($nameErr === "")) {
            echo "<h1>$nameErr</h1><br>";
        }
        if (!($descriptionErr === "")) {
            echo "<h1>$descriptionErr</h1><br>";
        }
        if (!($priceErr === "")) {
            echo "<h1>$priceErr</h1><br>";
        }
        if (!($imageErr === "")) {
            echo "<h1>$imageErr</h1><br>";
        }
        echo '<h2 style="text-align: center">Please wait to edit items</h2>';
        header('Refresh: 2; URL=b.php');
    }
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>