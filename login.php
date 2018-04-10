<?php
    session_start();
    if(isset($_SESSION['user'])) {
        header('Location:main.php');
    }
?>
    <html>

    <head>

    </head>

    <body>
        <form method="POST" action="index.php">
            <?php if(@$_GET['error'] == 1) { ?>
            <div class="alert alert-danger">
                Login incorrect. Please try again
            </div>
            <?php } ?>
            <form class="form" autocomplete="off">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                </div>
                <input type="submit" class="btn btn-primary" value="login">Submit</input>
            </form>
        </form>
    </body>

    </html>