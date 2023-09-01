<?php


// Get all caretakers

function get_all_caretakers(){
    global $db;

    $sql = "SELECT * FROM caretakers ORDER BY id ASC";

    $caretakers = $db->query($sql);

    return $caretakers;

}

// Get number of caretakers

function get_caretakers_count(){
    global $db;

    $sql = "SELECT * FROM caretakers";

    $caretakers = $db->query($sql);

    return $caretakers->rowCount();

}

?>