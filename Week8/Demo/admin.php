<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        session_start();
        
        include_once './header.php';
        
        if ( !isset($_SESSION['loggedin']) 
                || $_SESSION['loggedin'] !== true 
            ) {
            header('Location: passcode.php');
            //die('Access not allowed');
        }
        
        
        ?>
        
        <h1>Admin Page</h1>
    </body>
</html>