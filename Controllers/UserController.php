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
            return true;
        } else {
            return false;
        }
    }

    function authenticate($email, $password) {
        $authentic = false;
        
        if($email == 'admin' && $password == 'admin') {
            session_start();
            $_SESSION['user'] = $email;
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