<?php 
session_start();
$username=isset($_POST['username']) ? $_POST['username'] : '';
$password=isset($_POST['password']) ? $_POST['password'] : '';
if($username=='admin' && $password=='admin')
{
    $_SESSION['user'] = $username;
    header("location:info.php");
}
else{
    echo "Incorrect username and password, please re-check";
    require_once "index.php";
    
}



?>