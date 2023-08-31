<?php 

$action = filter_input(INPUT_POST, 'action');

if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'home';
    }
}

switch ($action) {
    case 'home':
        include './dashboard.php';
        break;
    case 'login':
        include './login.php';
        break;
    case 'logout':
        include './logout.php';
        break;
    case 'redirect':
    include './dashboard.php';
    break;


    // Actions
    case 'add_doctor':
        include './manage_Doctors.php';
        break;
    case 'add_patient':
        include './manage_Patients.php';
        break;
    case 'add_nurse':
        include './manage_Nurses.php';
        break;
    case 'add_accountan':
        include './manage_Accountants.php';
        break;
    case 'add_admin':
        include './manage_Admin.php';
        break;
    case 'add_laboratrist':
        include './manage_Laboratrists.php';
        break;

    
    default:
        # code...
        break;
}


?>