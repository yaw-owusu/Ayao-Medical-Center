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
    
    default:
        # code...
        break;
}


?>