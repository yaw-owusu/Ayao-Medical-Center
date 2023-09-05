<?php


// Get all administrators

function get_all_administrators(){
    global $db;

    $sql = "SELECT * FROM administrators ORDER BY id ASC";

    $pharmacists = $db->query($sql);

    return $administrators;

}


// Get number of administrators

function get_administrators_count(){
    global $db;

    $sql = "SELECT * FROM administrators";

    $administrators = $db->query($sql);

    return $administrators->rowCount();

}


?>