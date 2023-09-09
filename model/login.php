<?php

function is_valid_login($email, $password)
{
    global $db;

    $sql =  "SELECT email,password FROM admins
    WHERE email = :email";

    $statement = $db->prepare($sql);

    $statement->bindValue(':email', $email);

    $statement->execute();

    $row = $statement->fetch();

    $statement->closeCursor();

    if ($row == null) {
        return false;
    } else {
        if ($row['password'] == $password) {
            return true;
        } else {
            return false;
        }
    }
}


// function generateLoginQuery($type)
// {
//     switch ($type) {
//         case "admins":
//             return "SELECT email,password FROM admin
//             WHERE email = :email";
//         case "doctors":
//             return "SELECT email,password FROM doctors
//             WHERE email = :email";
//         case "patients":
//             return "SELECT email,password FROM patients
//             WHERE email = :email';

//     }
// }

// function generateEmailQuery($type)
// {
//     switch ($type) {
//         case "admins":
//             return "SELECT email FROM admin
//             WHERE email = :email"
//         case "doctors":
//             return 'SELECT email FROM doctors
//             WHERE email = :email'
//         case "patients":
//             return 'SELECT email FROM patients
//             WHERE email = :email'
//         case "pharmacists":
//             return 'SELECT email FROM pharmacists
//             WHERE email = :email'
//     }
// }


function get_admin_by_email($email)
{
    global $db;

    $sql = "SELECT email FROM admins
    WHERE email = :email";

    $statement = $db->prepare($sql);

    $statement->bindValue(':email', $email);

    $statement->execute();

    $admin = $statement->fetch();

    $statement->closeCursor();

    if ($admin == null) {

        return false;

    } else {
        
        return $admin;
    }
}
