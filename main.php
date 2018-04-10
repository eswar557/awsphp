<?php
    require_once('./Models/UserModel.php');
    session_start();
    $user = new UserModel('');
    if(!isset($_SESSION['user'])) {
        header("Location:login.php");
    } else {
        $user = $_SESSION['user'];
    }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Main Page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    You are logged in. <a href="index.php?op=logout">Logout <?php print $user->get_username()  ?></a>
</body>
</html>