<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
           $email = 'test@test.com';           
  
            if ( filter_var($email, FILTER_VALIDATE_EMAIL) != false ) {
                echo '<p>this email is valid</p>';
            } else {
                echo '<p>this email is <strong>NOT</strong> valid</p>';
            }
        ?>
    </body>
</html>