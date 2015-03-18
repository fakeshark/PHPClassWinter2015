<?php session_start();  ?>
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
        
        session_start();
        $_SESSION['loggedin'] = false;
        
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

        if (passwordIsEmpty($email) != '') {
            $error_message[$arrayCounter] = passwordIsEmpty($email);
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
            include './login.php';
            exit();
        }

        if (checkUserLogin($email, $password))
        {
                $_SESSION['loggedin'] = true;
                $_SESSION['email'] = $email;
                header ('Location: admin.php');
        } else {
            $_SESSION['loggedin'] = false;
            echo "Login Failed.";            
        }
        
        
        ?>
        <br /><br />
        <a href="signup.php">Return to Sign-up page</a>
    </body>
</html>