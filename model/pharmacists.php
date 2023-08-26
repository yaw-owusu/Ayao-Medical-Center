<?php


// Get all pharmacists

function get_all_pharmacists(){
    global $db;

    $sql = "SELECT * FROM pharmacists ORDER BY id ASC";

    $pharmacists = $db->query($sql);

    return $pharmacists;

}


// Get number of pharmacists

function get_pharmacists_count(){
    global $db;

    $sql = "SELECT * FROM pharmacists";

    $pharmacists = $db->query($sql);

    return $pharmacists->rowCount();

}


?>