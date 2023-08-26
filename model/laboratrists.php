<?php


// Get all laboratrists

function get_all_laboratrists(){
    global $db;

    $sql = "SELECT * FROM laboratrists ORDER BY id ASC";

    $laboratrists = $db->query($sql);

    return $laboratrists;

}


// Get number of laboratrists

function get_laboratrists_count(){
    global $db;

    $sql = "SELECT * FROM laboratrists";

    $laboratrists = $db->query($sql);

    return $laboratrists->rowCount();

}


?>