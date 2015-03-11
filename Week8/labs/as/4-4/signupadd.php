<?php //session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        include './functions.php';
        include_once './header.php';

        // do error handling before you continue

        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');


        $arrayCounter = 0;
        $error_message = array();
        
        if (emailIsEmpty($email) != '') {
            $error_message[$arrayCounter] = emailIsEmpty($email);
            $arrayCounter += 1;
        }
        
        if (emailIsValid($email) != '') {
            $error_message[$arrayCounter] = emailIsValid($email);
            $arrayCounter += 1;
        }
        
        if (doesEmailExist($email) != '') {
            $error_message[$arrayCounter] = doesEmailExist($email);
            $arrayCounter += 1;
        }
        
        if (passwordIsEmpty($email) != '') {
            $error_message[$arrayCounter] = passwordIsEmpty($email);
            $arrayCounter += 1;
        }
        
        if (passwordIsValid($email) != '') {
            $error_message[$arrayCounter] = passwordIsValid($email);
            $arrayCounter += 1;
        }

        // If any errors exist, output error messages and re-display the form.
        $testArray = array_filter($error_message);
        if (!empty($testArray)) {
            foreach ($error_message as $errMsg) {
                if (!empty($errMsg)) {
                    echo $errMsg, '<br />';
                }
            }
            include './signup.php';
            exit();
        }

        $results = insertUser($email, $password);
        echo $results;
        ?>
        <a href="signup.php">Return to Sign-up page</a>
    </body>
</html>