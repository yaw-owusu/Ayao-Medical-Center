<?php


// Delete admin
function delete_admin($id)
{

    global $db;

    $sql = "DELETE FROM admins WHERE id = :id";

    $statement = $db->prepare($sql);

    $statement->bindValue(':id', $id);

    $success = $statement->execute();

    $statement->closeCursor();

    return $success;
}

function create_admin($name, $email, $phoneNumber)
{

    global $db;

    $sql = "INSERT INTO admins (name, email, phonenumber) 
    VALUES (:name,:email,:phoneNumber)";

    $statement = $db->prepare($sql);

    $statement->bindValue(':name', $name);

    $statement->bindValue(':email', $email);

    $statement->bindValue(':phoneNumber', $phoneNumber);

    $success = $statement->execute();

    $statement->closeCursor();

    $adminId = $db->lastInsertId();

    if (!$success) {
        return false;
    }

    return $adminId;
}
