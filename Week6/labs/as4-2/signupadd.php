<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        // do error handling before you continue

        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');


        $error_message = '';

        // Validate email is not empty.
        // Validate email is string data type.

        if (empty($email)) {
            $error_message .= "Email is a required field.<br />";
        }

        if (!is_string($email)) {
            $error_message .= "Email field must contain valid data.<br />";
        }

        // Validate email has been entered in the correct format.
        // Validate password is not empty.
        // Validate password is string data type.

        if (empty($password)) {
            $error_message .= "Password is a required field.<br />";
        }

        if (!is_string($password)) {
            $error_message .= "Password field must contain valid data.<br />";
        }

        // Validate password length to be at least 5 characters long.

        if (strlen($password) <= 4) {
            $error_message .= "Password must be at least five characters long.<br />";
        }

        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            $error_message .= "Email is formatted incorrectly.<br />";
        }

        // Display error messages (if any) and re-display the form.

        if (!empty($error_message)) {
            echo $error_message;
            include './signup.php';
            exit();
        }

        if (!empty($error_message)) {
            echo $error_message;
            include './signup.php';
            exit();
        }

        $password = sha1($password);

        // remember to change the port

        $db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3306;", "root", "");
        $dbs = $db->prepare('insert into signup set email = :email, password =:password');

        // you must bind the data before you execute
        $dbs->bindParam(':email', $email, PDO::PARAM_STR);
        $dbs->bindParam(':password', $password, PDO::PARAM_STR);

        // When you execute remember that a rowcount means a change was made
        if ($dbs->execute() && $dbs->rowCount() > 0) {
            echo 'Data was added';
        } else {
            echo 'Data was NOT added';
        }
        ?>
        <a href="signup.php">Return to login page</a>
    </body>
</html>