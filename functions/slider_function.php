<?php

function fetch_slider($field_type){
    global $connection;
    $query = "SELECT * FROM sliderbar WHERE section_type = 'slider' AND field_type = '$field_type'";
    $execute = $connection->query($query);
    $record = $execute->fetch_assoc();
    return $record['field_value'];
}

?>