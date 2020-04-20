<?php
session_start();
    if ($_GET['logout'])
    {
        session_destroy();
    }
?>

<!Doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Album App by Yuri</title>

        <link rel="stylesheet" type="text/css" href="static/css/bootstrap.min.css">
        <link href="static/css/font-awesome/css/font-awesome.css" rel="stylesheet">

        <link href="static/css/animate.css" rel="stylesheet">
        <link href="static/css/style.css" rel="stylesheet">
    </head>
    <body>
        <div class="middle-box text-center loginscreen animated fadeInDown rounded h-100">
            <?php
            if($_GET['error'])
            {
            ?>
            <p class="font-bold alert alert-danger m-b-sm">
                Sorry, we couldn't find an account with this username. Please check you're using the right username and try again.
            </p>
            <?php
            }
            ?>
            <div class="middle-box text-center loginscreen animated fadeInDown white-bg text-center">
                <h3>Welcome to Album App by Yuri</h3>
                <p>Please fill the your username and password in the fields below</p>
                <form class="m-t" action="./login.php" role="form" name="form" id="form" method="POST">
                    <div id="users" style="display: inline;">
                        <div class="form-group">
                            <input type="text" name="username"  class="text-center" id="username" class="form-control" placeholder="Username" />
                        </div>
                        <div class="form-group" id="pass">
                            <input type="password" name="password" class="text-center" id="password" class="form-control" placeholder="Password" />
                        </div>
                        <input type="submit" name="login" value="Login" id="login" class="btn btn-primary m-b text-center" />
                    </div>
                </form>
                <p class="m-t"><small>&copy;Yuri Menzl Celaschi 2019</small></p>
            </div>
        </div>
    </body>
</html>