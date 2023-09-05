<?php


// Get all supports

function get_all_supports(){
    global $db;

    $sql = "SELECT * FROM supports ORDER BY id ASC";

    $supports = $db->query($sql);

    return $supports;

}


// Get supporter by id
function get_support($id){
    global $db;

    $sql = "SELECT * FROM supports WHERE id = :id";

    $statement = $db->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->execute();

    $selected_supporter = $statement->fetch();
    $statement->closeCursor();

    if( $selected_supporter == null ){
        return false;
    }

    return $selected_supporter;
}

// Get number of supports
function get_supports_count(){
    global $db;

    $sql = "SELECT * FROM supports";

    $supports = $db->query($sql);

    return $supports->rowCount();

}

// Delete supporter
function delete_supporter($id) {

    global $db;  
    
    $sql = "DELETE FROM supports WHERE id = :id";
    
    $statement = $db->prepare($sql);
    $statement->bindValue(':id', $id);
    $success = $statement->execute();
    $statement->closeCursor();

    return $success;
}

function create_supporter($name,$email, $phoneNumber) {

    global $db;  
    
    $sql = "INSERT INTO supporters (name, email, phonenumber) 
    VALUES (:name,:email,:phoneNumber)";

    $statement = $db->prepare($sql);

    $statement->bindValue(':name', $name);

    $statement->bindValue(':email', $email);

    $statement->bindValue(':phoneNumber', $phoneNumber);

    $success = $statement->execute();

    $statement->closeCursor();

    $supporterId = $db->lastInsertId();

    if(!$success){
        return false;
    }

    return $supporterId;
}


?>