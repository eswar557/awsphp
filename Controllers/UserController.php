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
        $servername = "localhost";
        $username = "root";
        $password = "Param123";
        $dbname = "paramDB";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        $sql = "SELECT * FROM users where email='admin@test.com'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            session_start();
            $_SESSION['user'] = $row['first_name'];
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