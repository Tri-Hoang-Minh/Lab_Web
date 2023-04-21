<?php
$conn = mysqli_connect('localhost', 'root', '', 'shop');
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
if (isset($_REQUEST['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM products WHERE id='$id'";

    if (mysqli_query($conn, $sql)) {
        echo "<h1 style='text-align: center; color: #98FB98'>THAO TÁC XÓA THÀNH CÔNG!</h1>";
    } else {
        echo "<h1 style='text-align: center; color: red'>ERROR:";
        echo "<h2 style='text-align: center;'>Could not remove product $sql. </h2>" . mysqli_error($conn);
    }
}
mysqli_close($conn);
echo "<h1 style='text-align: center'>Please wait to delete item</h1>";
header('Refresh: 2; URL=index.php');
?>