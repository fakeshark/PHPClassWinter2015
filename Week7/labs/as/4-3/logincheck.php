<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        include './functions.php';
        // do error handling before you continue

        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');


        $error_message = array();

        $error_message[0] = emailIsEmpty($email);       // Validate email is not empty & is string data type.
        $error_message[1] = emailIsValid($email);       // Validate email is formatted properly.
        $error_message[2] = passwordIsEmpty($password); // Validate password is not empty & is string data type.

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
        
        $results = checkUserLogin($email, $password);
        echo $results;

        ?>
        <a href="signup.php">Return to Sign-up page</a>
    </body>
</html>