<!-- Delete product -->
<?php
$conn = mysqli_connect('localhost', 'root', '', 'shop');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $result = mysqli_query($conn, "DELETE FROM products WHERE id='$id'");
}
mysqli_close($conn);
?>