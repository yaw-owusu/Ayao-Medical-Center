<?php


// Get all doctors

function get_all_doctors(){
    global $db;

    $sql = "SELECT * FROM doctors ORDER BY id ASC";

    $doctors = $db->query($sql);

    return $doctors;

}


// Get number of doctors

function get_doctors_count(){
    global $db;

    $sql = "SELECT * FROM doctors";

    $doctors = $db->query($sql);

    return $doctors->rowCount();

}


function create_doctor($name, $email, $phoneNumber,$spec)
{

    global $db;

    $sql = "INSERT INTO doctors (name, email, phone_numbers,speciality) 
    VALUES (:name,:email,:phoneNumber,:spec)";

    $statement = $db->prepare($sql);

    $statement->bindValue(':name', $name);

    $statement->bindValue(':email', $email);

    $statement->bindValue(':phoneNumber', $phoneNumber);

    $statement->bindValue(':spec', $spec);

    $success = $statement->execute();

    $statement->closeCursor();

    $adminId = $db->lastInsertId();

    if (!$success) {
        return false;
    }

    return $adminId;
}

// // Add a teammember
// // Delete a teammember
function delete_doctor($id) {

    global $db;  
    
    $sql = "DELETE FROM doctors WHERE id = :id";
    
    $statement = $db->prepare($sql);

    $statement->bindValue(':id', $id);

    $success = $statement->execute();

    $statement->closeCursor();

    return $success;
}


function update_doctor($id, $name, $email, $phone,$spec)
{

    global $db;

    $sql = "UPDATE doctors SET name =:name,email=:email,phone_numbers=:phone,speciality=:spec WHERE id =:id";

    $statement = $db->prepare($sql);

    $statement->bindValue(':id', $id);

    $statement->bindValue(':name', $name);

    $statement->bindValue(':email', $email);

    $statement->bindValue(':phone', $phone);

    $statement->bindValue(':spec', $spec);

    $success = $statement->execute();

    $statement->closeCursor();

    if (!$success) {
        return false;
    }

    return $success;
}
