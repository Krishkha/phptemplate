<?php

    function fetch_menu($field_type){
        global $connection;
        $query = "SELECT * FROM menubar WHERE section_type = 'menu' AND field_type = '$field_type'";
        $execute = $connection->query($query);
        $record = $execute->fetch_assoc();
        return $record['field_value'];
    }
    ?>