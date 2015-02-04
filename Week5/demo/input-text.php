<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $fname = filter_input(INPUT_POST, 'fname');
        $email = filter_input(INPUT_POST, 'email');
        $hidden = filter_input(INPUT_POST, 'hidden');
        
        if ( empty($hidden))
        {
            $hidden = "I am hidden";
        }
        
        echo $fname;
        ?>
        <form action="#" method="post" >
            Full Name:<input type="text" name="fname" value="<?php echo $fname; ?>" />
            Email:<input type="email" name="email" value="<?php echo $email; ?>" />
            <input type="hidden" name="hidden" value="<?php echo $hidden; ?>" />
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
