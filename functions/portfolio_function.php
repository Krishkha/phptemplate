<?php

function fetch_port($field_type){
    global $connection;
    $query = "SELECT * FROM genneral_settings WHERE section_type = 'port' AND field_type = '$field_type'";
    $execute = $connection->query($query);
    $record = $execute->fetch_assoc();
    return $record['field_value'];
}

?>