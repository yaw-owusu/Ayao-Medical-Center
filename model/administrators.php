<!-- <?php


// Get all administrators

function get_all_administrators(){
    global $db;

    $sql = "SELECT * FROM admins ORDER BY id ASC";

    $administrators = $db->query($sql);

    return $administrators;

}


// Get number of administrators

function get_administrators_count(){
    global $db;

    $sql = "SELECT * FROM admins";

    $administrators = $db->query($sql);

    return $administrators->rowCount();

}


?> -->