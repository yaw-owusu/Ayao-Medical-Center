<?php

// Get all admins

function get_all_admins()
{

    global $db;

    $sql = "SELECT * FROM admins ORDER BY id ASC";

    $admins = $db->query($sql);

    return $admins;
}


// Get number of admins

function get_admins_count()
{

    global $db;

    $sql = "SELECT * FROM admins";

    $admins = $db->query($sql);

    return $admins->rowCount();
}


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


function update_admin($id, $name, $email, $phone)
{

    global $db;

    $sql = "UPDATE admins SET name =:name,email=:email,phonenumber=:phone WHERE id =:id";

    $statement = $db->prepare($sql);

    $statement->bindValue(':id', $id);

    $statement->bindValue(':name', $name);

    $statement->bindValue(':email', $email);

    $statement->bindValue(':phone', $phone);

    $success = $statement->execute();

    $statement->closeCursor();

    if (!$success) {
        return false;
    }

    return $success;
}


function get_admin($id)
{
    global $db;

    $sql = "SELECT * FROM admins WHERE id = :id";

    $statement = $db->prepare($sql);

    $statement->bindValue(':id', $id);

    $statement->execute();

    $selected_admin = $statement->fetch();

    $statement->closeCursor();

    if ($selected_admin == null) {
        return false;
    } else {

        return $selected_admin;
    }
    
}


