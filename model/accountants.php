<?php


// Get all accountants

function get_all_accountants(){
    global $db;

    $sql = "SELECT * FROM accountants ORDER BY id ASC";

    $accountants = $db->query($sql);

    return $accountants;

}


// Get number of accountants

function get_accountants_count(){
    global $db;

    $sql = "SELECT * FROM accountants";

    $accountants = $db->query($sql);

    return $accountants->rowCount();

}


?>