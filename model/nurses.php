<?php


// Get all nurses

function get_all_nurses(){
    global $db;

    $sql = "SELECT * FROM nurses ORDER BY id ASC";

    $nurses = $db->query($sql);

    return $nurses;

}


// Get number of nurses

function get_nurses_count(){
    global $db;

    $sql = "SELECT * FROM nurses";

    $nurses = $db->query($sql);

    return $nurses->rowCount();

}

// // Add a teammember
// function add_teammember($name, $position, $telephone,$email,$image) {
//     global $db;  

//     $sql = "INSERT INTO teammembers(name, position, telephone, image,email,date, time) 
//     VALUES (:name,:position,:telephone,:image,:email,CURRENT_DATE(),CURRENT_TIME())";
    
//     $statement = $db->prepare($sql);

//     $statement->bindValue(':name', $name);
//     $statement->bindValue(':position', $position);
//     $statement->bindValue(':telephone', $telephone);
//     $statement->bindValue(':email', $email);
//     $statement->bindValue(':image',$image);


//     $success = $statement->execute();
//     $statement->closeCursor();

//     $service_id = $db->lastInsertId();

//     if($success == true){
//         return $service_id;
//     }else{
//         return false;
//     }
// }

// // Delete a teammember
// function delete_teammember($id) {

//     global $db;  
    
//     $sql = "DELETE FROM teammembers WHERE id = :id";
    
//     $statement = $db->prepare($sql);
//     $statement->bindValue(':id', $id);
//     $success = $statement->execute();
//     $statement->closeCursor();

//     return $success;
// }



?>