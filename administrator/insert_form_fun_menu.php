<?php
    include "../connection.php";

    $section_type = $_POST['section_type'];
    $field_type = $_POST['field_type'];
    $field_value = $_POST['field_value'];
    $create_date = $_POST['create_date'];

    $query = "INSERT INTO menubar (section_type, field_type, field_value, create_date) VALUES('$section_type','$field_type','$field_value','$create_date')";

    $executeQuery = $connection->query($query);

    if($executeQuery){
        /* header("Location: register.php?message=Your Data Saved Successfully"); */
        header("Location: index.php");
    }

?>