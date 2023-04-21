<!-- Edit product -->

<?php
// Define variables
$error = "";

// Connection
$conn = mysqli_connect('localhost', 'root', '', 'shop');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Update a product
if (isset($_POST["Update"])) {
    if ($nameErr == "" && $descriptionErr == "" && $priceErr == "" && $imageErr == "") {
        $id = $_GET["id"];
        $name = $_POST["name"];
        $dcolumn_name = $column_name = $_POST["column_name"];
    // Validate
    // Name
    if ($column_name == "name") {
        if (empty($text)) {
            $error = "Name is required";
        } else {
            $name = test_input($text);
            if (strlen($name) < 5 || strlen($name) > 40) {
                $error = "Length of name must be between 5 and 40 characters";
            }
        }
    }
    // Description
    if ($column_name == "description") {
        if (!empty($text)) {
            $description = test_input($text);
            if (strlen($description) > 5000) {
                $error = "Length of description must be less than 5000 characters";
            }
        }
    }
    // Price
    if ($column_name == "price") {
        if (empty($text)) {
            $error = "Price is required";
        } else {
            $price = test_input($text);
            if (!filter_var($price, FILTER_VALIDATE_FLOAT) || $price < 0) {
                $error = "Price must be a float and greater than 0";
            }
        }
    }
    // Image
    if ($column_name == "image") {
        if (!empty($text)) {
            $image = test_input($text);
            if (strlen($image) > 255) {
                $error = "Length of the link image must be less or equal 255 characters";
            }
        }
    }
    $text = test_input($text);
    if (!$error) {
        $result = mysqli_query($conn, "UPDATE products SET $column_name="$text" WHERE id="$id"");
    }
}
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