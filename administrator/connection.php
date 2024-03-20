<?php

$con = mysqli_connect('localhost', 'root', '', 'phptemplate');

if (empty($con)) {
    die("Connection could not establish");
}
