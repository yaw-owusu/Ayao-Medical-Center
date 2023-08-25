<?php


// Get all patients

function get_all_patients(){
    global $db;

    $sql = "SELECT * FROM patients ORDER BY id ASC";

    $patients = $db->query($sql);

    return $patients;

}


// Get number of patients

function get_patients_count(){
    global $db;

    $sql = "SELECT * FROM patients";

    $patients = $db->query($sql);

    return $patients->rowCount();

}


?>