<?php
class UserController {
    function UserController()
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
        $servername = "localhost";
        $username = "root";
        $db_password = "Param123";
        $dbname = "paramDB";
        $conn = new mysqli($servername, $username, $db_password, $dbname);
        $password = md5($password);
        $sql = "SELECT * FROM users where email='$email' and password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            session_start();
            $_SESSION['user'] = $row['first_name'].' '.$row['last_name'];
            $authentic = true;
        }
        $conn->close();
        return $authentic;
    }
    function logout() {
        session_start();
        session_destroy();
    }
}
?>