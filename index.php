<?php


include_once("./utilities/main.php");

$action = filter_input(INPUT_POST, 'action');

if ($action == NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action == NULL) {
        $action = 'home';
    }
}



switch ($action) {
    case 'home':

        $accountantsCount = get_accountants_count();

        $doctorsCount = get_doctors_count();

        $laboratristsCount = get_laboratrists_count();

        $nursesCount = get_nurses_count();

        $patientsCount = get_patients_count();

        $pharmacistsCount = get_pharmacists_count();

        // include './view/dashboard.php';
        include './Dashboard.php';

        break;

    case 'view_manageAdmins':
        include './view/manage_administrators.php';
        break;

    case 'view_manageDoctors':
        include './view/manage_doctors.php';
        break;

    case 'logout':
        include './logout.php';
        break;

    case 'redirect':
        include './dashboard.php';
        break;
    case 'view_login':
        include 'pages-login.php';
        break;


        // Admin Actions
    case 'createAdmin':

        $name = filter_input(INPUT_POST, 'createAdminName');

        $email = filter_input(INPUT_POST, 'createAdminEmail');

        $phoneNumber = filter_input(INPUT_POST, 'createAdminPhone');

        if (create_admin($name, $email, $phoneNumber)) {
            header('Location:.?action=view_manageAdmins');
        } else {
            return;
        }

        break;

    case 'update_admin':

        $id = filter_input(INPUT_POST, 'updateAdminId');

        $name = filter_input(INPUT_POST, 'updateAdminName');

        $email = filter_input(INPUT_POST, 'updateAdminEmail');

        $phoneNumber = filter_input(INPUT_POST, 'updateAdminPhone');

        if (update_admin($id, $name, $email, $phoneNumber)) {
            header('Location:.?action=view_manageAdmins');
        } else {
            return;
        }

        break;


    case 'deleteAdmin':

        $id = filter_input(INPUT_POST, 'deleteAdminId');

        if (delete_admin($id)) {
            header('Location:.?action=view_manageAdmins');
        } else {
            return;
        }

        break;

    case 'getAdminDetails':

        $id = intval(filter_input(INPUT_POST, 'updateAdminId'));

        $admin = get_admin($id);

        if ($admin == false) {
            $jsonData = array(
                "message" => "Admin with Id does not exist.",
                "code" => "400",
                "isSuccessful" => false
            );
        } else {
            $jsonData = array(
                "message" => "Success",
                "code" => "200",
                "isSuccessful" => true,
                "data" => array(
                    "name" => $admin["name"],
                    "email" => $admin["email"],
                    "phone" => $admin["phonenumber"]
                )
            );
        }

        header("Content-type:application/json");

        echo json_encode($jsonData);

        break;



        // Doctor actions

    case 'createDoctor':

        $name = filter_input(INPUT_POST, 'createDoctorName');

        $email = filter_input(INPUT_POST, 'createDoctorEmail');

        $phoneNumber = filter_input(INPUT_POST, 'createDoctorPhone');

        $spec = filter_input(INPUT_POST, 'createDoctorSpec');

        if (create_doctor($name, $email, $phoneNumber, $spec)) {
            header('Location:.?action=view_manageDoctors');
        } else {
            return;
        }

        include './manage_Accountants.php';

        break;

        // case 'updateDoctor':

        //     $id = filter_input(INPUT_POST, 'updateDoctorId');

        //     $name = filter_input(INPUT_POST, 'updateDoctorName');

        //     $email = filter_input(INPUT_POST, 'updateDoctorEmail');

        //     $phoneNumber = filter_input(INPUT_POST, 'updateDoctorPhone');

        //     $spec =  filter_input(INPUT_POST, 'updateDoctorPhone');

        //     if (update_doctor($id, $name, $email, $phoneNumber)) {
        //         header('Location:.?action=view_manageDoctors');
        //     } else {
        //         return;
        //     }

        //     break;

    case 'deleteDoctor':

        $id = filter_input(INPUT_POST, 'deleteDoctorId');

        if (delete_doctor($id)) {
            header('Location:.?action=view_manageDoctors');
        } else {
            return;
        }

        break;

    case 'login':
        // store the posted values
        $email = filter_input(INPUT_POST, 'adminLoginEmail');
        $password = filter_input(INPUT_POST, 'adminLoginPassword');
        $type = filter_input(INPUT_POST, 'type');

        if (empty($email) && empty($password)) {

            $login_message = '';
            return include('pages-login.php');
        }


        // validate the credentials

        if (is_valid_login($email, $password)) {
            // valid credentials

            // get the admin using his email
            $admin = get_admin_by_email($email);

            // check if the results is not null and set session variables
            if ($admin != false) {
                $_SESSION['is_valid_admin'] = true;
                $_SESSION['admin_name'] = $admin['name'];
                $_SESSION['admin_id'] = $admin['id'];
                $_SESSION['admin_email'] = $admin['email'];
                // $_SESSION['admin_type'] = $admin['type'];
            }

            header("Location:.?action=home");
        } else {

            $login_message = 'Invalid Email or Password';

            include('pages-login.php');
        }

        break;

    case 'logout':
        $_SESSION = array();
        session_destroy();
        header("Location:.");
        break;



    case 'add_admin':
        include './manage_Admin.php';
        break;
    case 'add_laboratrist':
        include './manage_Laboratrists.php';
        break;
    case 'add_pharmacist':
        include './manage_Pharmacists.php';
        break;
    default:
        # code...
        break;
}
