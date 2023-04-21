<!-- Insert Product -->

<?php

$error = array('name' => '', 'description' => '', 'price' => '', 'image' => '');
$name = $description = $price = $image = "";


$conn = mysqli_connect('localhost', 'root', '', 'shop');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Name
    if (empty($_POST["name"])) {
        $error['name'] = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (strlen($name) <1 || strlen($name) > 40) {
            $error['name'] = "Length of name must be between 5 and 40 characters";
        }
    }

    if (!empty($_POST["description"])) {
        $description = test_input($_POST["description"]);
        if (strlen($description) > 5000) {
            $error['description'] = "Length of description must be less than 5000 characters";
        }
    }

    if (empty($_POST["price"])) {
        $error['price'] = "Price is required";
    } else {
        $price = test_input($_POST["price"]);
        if (!filter_var($price, FILTER_VALIDATE_FLOAT) || $price < 0) {
            $error['price'] = "Price must be a float and greater than 0";
        }
    }
    if (!empty($_POST["image"])) {
        $image = test_input($_POST["image"]);
        if (strlen($image) > 255) {
            $error['image'] = "Length of the link image must be less or equal 255 characters";
        }
    }
}
if (!$error['name'] && !$error['price'] && !$error['description'] && !$error['image']) {
    $result = mysqli_query($conn, "INSERT INTO products (name, price, description, image) VALUE ('$name', '$price', '$description','$image')");
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

mysqli_close($conn);
echo json_encode($error);
?>