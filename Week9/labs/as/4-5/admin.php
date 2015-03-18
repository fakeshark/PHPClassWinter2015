<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();

        include_once './header.php';

        if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
            header('Location: login.php');
        }
        ?>

        <h1>Welcome to the Admin Page!</h1><br /><br />
        <h4>you are logged in as:&nbsp;&nbsp;<?php echo $_SESSION['email']; ?></h4>
    </body>
</html>
