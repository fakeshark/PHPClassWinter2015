<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php
        session_start();
        $_SESSION['loggedin'] = false;


        include './classes/Validation.class.php';
        include './classes/Database.class.php';
        include './classes/Messages.class.php';
        include './classes/Util.class.php';

        $validate = new Validation();
        $database = new Database();
        $messages = new Messages();
        $util = new Util();
        
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');

        if ($util->isPost()) {

            if (!$validate->emailIsNotEmpty($email)) {
                $messages->addError('Email is a required field.');
            }

            if (!$validate->emailIsValid($email)) {
                $messages->addError('Email is not valid.');
            }

            if ($validate->doesEmailExist($email)) {
                $messages->addError('Email already exists in our database.');
            }

            if (!$validate->passwordIsNotEmpty($password)) {
                $messages->addError('Password is a required field.');
            }
            
            if (!$validate->passwordIsValid($password)) {
                $messages->addError('Password must be greater than four charatcers long.');
            }

            if ($messages->hasErrors()) {
                $messages->displayErrorMsgs();
                include './signup.php';
                exit();
            }
        }

        if ($database->insertUser($email, $password)) {
            echo "Sign-up Successful.";
        } else {
            $_SESSION['loggedin'] = false;
            echo "Sign-up Failed.";
        }
        ?>

        <a href="login.php">Log-in page</a>
    </body>
</html>