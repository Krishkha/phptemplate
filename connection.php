<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "phptemplate";

$connection = mysqli_connect($servername,$username,$password,$database);

if(empty($connection)){
    die("Can't open database connection. Kindly check your database connection.");
}


?>