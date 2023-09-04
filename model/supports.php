<?php


// Get all supports

function get_all_supports(){
    global $db;

    $sql = "SELECT * FROM supports ORDER BY id ASC";

    $supports = $db->query($sql);

    return $supports;

}



function get_support($id){
    global $db;

    $sql = "SELECT * FROM admin WHERE type = 'support' AND id = :id";

    $statement = $db->prepare($sql);
    $statement->bindValue(':id', $id);
    $statement->execute();

    $selected_marketer = $statement->fetch();
    $statement->closeCursor();

    if( $selected_marketer == null ){
        return false;
    }else{
        
        return $selected_marketer;
        
    }


}



// Get number of supports

function get_supports_count(){
    global $db;

    $sql = "SELECT * FROM supports";

    $supports = $db->query($sql);

    return $supports->rowCount();

}


?>