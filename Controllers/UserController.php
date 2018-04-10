<?php
class UserController {
    function UserController()
    {

    }
    function create($username, $password, $email)
    {

    }

    function login($email, $password) {
        if($this->authenticate($email, $password)) {
            session_start();
            $user = new UserModel($email);
            $_SESSION['user'] = $user;
            return true;
        } else {
            return false;
        }
    }

    function authenticate($email, $password) {
        $authentic = false;
        if($email == 'admin' && $password == 'admin') {
            $authentic = true;
        }
        return $authentic;
    }
    function logout() {
        session_start();
        session_destroy();
    }
}
?>