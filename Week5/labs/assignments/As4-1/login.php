<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $email      = filter_input(INPUT_POST, 'email');
        $password   = filter_input(INPUT_POST, 'password');
        ?>
        <form action="loginadd.php" method="post" >

            email:<input type="text" name="email" value="<?php echo $email; ?>" /><br /><br />
            password:<input type="password" name="password" value="<?php echo $password; ?>" /><br /><br />
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
