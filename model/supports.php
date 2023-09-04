<?php


// Get all supports

function get_all_supports(){
    global $db;

    $sql = "SELECT * FROM supports ORDER BY id ASC";

    $supports = $db->query($sql);

    return $supports;

}


function get_support_by_id($id){
    global $db;

    $sql = "SELECT * FROM supports WHERE id = $id ORDER BY id ASC";

    $supports = $db->query($sql);

    return $supports;

}



// Get number of supports

function get_supports_count(){
    global $db;

    $sql = "SELECT * FROM supports";

    $supports = $db->query($sql);

    return $supports->rowCount();

}


?>