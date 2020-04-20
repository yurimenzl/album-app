<?php
session_start();
include ('./classes/database.class.php');
include ('./includes/functions.php');

if ($_POST['login'])
{
    
    $username = anti_injection($_POST['username']);
    $password = anti_injection($_POST['password']);
    $crypto = md5($password);

    $query = "SELECT username, password FROM users WHERE username = '" . $username . "' and password = '" . $crypto . "'";

    $response  = $database->queryset($query);
    $result = mysqli_num_rows($response);

    if ($result > 0) 
    {
        $_SESSION["logged"] = "true";

        header("Location: artist.php");
    }

    header("Location: index.php?error=1");
    
}

?>