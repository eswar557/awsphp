<?php
    require_once('./Models/UserModel.php');
    session_start();
    $user;
    if(!isset($_SESSION['user'])) {
        header("Location:login.php");
    } else {
        $user = $_SESSION['user'];
    }

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
        crossorigin="anonymous">
    <title>Login Page</title>
</head>

<body>
    <div class="container">
        <div class="jumbotron mt-5">
            <h1 class="display-4">Hello
                <?php print $user  ?>
            </h1>
            <p class="lead">You have successfully logged in.<span class='hidden-sm-down'> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet quidem
                corporis quibusdam modi voluptas porro, atque ratione. Alias magnam at perspiciatis distinctio? Dolorem
                dignissimos suscipit consectetur corporis nulla nesciunt quis?</span></p>
            <hr class="my-4">
            <p>If you want to logout. Please click on below link</p>
            <p class="lead">
                <a class="btn btn-primary btn-lg" href="index.php?op=logout" role="button">Logout</a>
            </p>
        </div>
    </div>
</body>

</html>