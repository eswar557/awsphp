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
        $password = md5($password);
        $db = mysqli_connect("localhost","root","Param123","paramDB");
        $sql = "SELECT * FROM admin WHERE email='$email' and password='$password'";
        $result = mysqli_query($db,$sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 1) {
            session_start();
            $_SESSION['user'] = $row['first_name'];//.' '.$row['last_name'];
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