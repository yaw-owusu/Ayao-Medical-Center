<?php


// Get all caretakers

function get_all_caretakers(){
    global $db;

    $sql = "SELECT * FROM caretakers ORDER BY id ASC";

    $caretakers = $db->query($sql);

    return $caretakers;

}

?>