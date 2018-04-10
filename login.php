<?php
    session_start();
    if(isset($_SESSION['user'])) {
        header('Location:main.php');
    }
?>
<html>

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4"
            crossorigin="anonymous">
        <title>Login Page</title>
    </head>

    <body>
        <form method="POST" action="index.php">
            <?php if(@$_GET['error'] == 1) { print $_SESSION['password']?>
            <div class="alert alert-danger">
                Login incorrect. Please try again
            </div>
            <?php } ?>
            <div class="card">
                <div class="card-head">Login</div>
                <div class="card-body">
                    <form class="form" autocomplete="off">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="text" class="form-control" name="email" id="email" placeholder="Enter email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                        </div>
                        <input type="submit" class="btn btn-primary" name="op" value="login" />
                    </form>
                </div>
            </div>

        </form>
    </body>

</html>