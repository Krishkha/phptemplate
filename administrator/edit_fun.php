<?php
include "connection.php";

$id = $_POST['id'];
$section_type = $_POST['section_type'];
$field_type = $_POST['field_type'];
$field_value = $_POST['field_value'];
$create_date = $_POST['create_date'];

$query = "UPDATE students SET section_type='$section_type', field_type='$field_type', field_value='$field_value', create_date='$create_date' WHERE id=$id";

$executeQuery = $con->query($query);

if($executeQuery){
    echo "<b>" . $id . " Updated</b>";
}

?>