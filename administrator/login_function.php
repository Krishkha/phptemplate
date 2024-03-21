<?php
include "connection.php";

$username = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM admin WHERE username = '$username' AND password = '$password'";

$execute = $con->query($query);

if($execute->num_rows == 1){
    $row = $execute -> fetch_assoc();
    $_SESSION['id'] = $row['id'];
    $_SESSION['firstname'] = $row['firstname'];
    $_SESSION['lastname'] = $row['lastname'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    header("Location: index.php");
} else {
    echo 'Admin Cant Login';
}