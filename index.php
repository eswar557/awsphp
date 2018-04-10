<?php
    require_once('./Controllers/UserController.php');
    require_once('./Models/UserModel.php');

    $op = $_REQUEST['op'];
    $user_controller = new UserController();

    switch($op) {
        case 'login':
            $email = $_POST['email'];
            $password = $_POST['password'];

            if($user_controller->login($email, $password)) {
                header("Location:main.php");
            } else {
                header("Location:login.php?error=1");
            }
            break;

        case 'logout':
            $user_controller->logout();
            header("Location:login.php");
            break;
        default: 
            header("Location:login.php");
    }
?>