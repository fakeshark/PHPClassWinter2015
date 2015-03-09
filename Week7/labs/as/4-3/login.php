<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login Page
            <?php if (!empty($_POST)) { echo " - Please fix invalid fields"; } ?>
        </title>
    </head>
    <body>
        <?php
        if (!empty($_POST)) {
            $email = filter_input(INPUT_POST, 'email');
            $password = filter_input(INPUT_POST, 'password');
        } else {
            $email = '';
            $password = '';
        }
        ?>

        <form action="./logincheck.php" method="post" >
            email:<input type="text" name="email" value="<?php echo $email; ?>" /><br /><br />
            password:<input type="password" name="password" value="<?php echo $password; ?>" /><br /><br />
            <input type="submit" value="Submit" />
        </form>

    </body>
</html>
