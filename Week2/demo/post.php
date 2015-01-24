<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        
            /*
             * The $_POST super global variable works like the GET
             * but with html forms.
             * you access the $_POST variable like so
             * $_POST['fname']
             * it is important that the input fields in the html form
             * have a name attribute that you are trying to access
             */
            $email = '';
            $fname = '';
            $number = '';
            
            // a trick to get the post value if a post is made.
            if ( !empty ( $_POST ) ) { 
                $fname = $_POST['fname'];
                $email = $_POST['email'];
                $number = $_POST['number'];
            }
        ?>
        
        
        <form action="post_process.php" method="post">
            
            Name: <input name="fname" type="text" value="<?php echo $fname; ?>" />
            <br />
            Email: <input name="email" type="text" value="<?php echo $email; ?>" />
            <br />
            number: <input name="number" type="number" value="<?php echo $number; ?>" />
            
            
            <input type="submit" value="submit" />
        </form>
        
        
        
    </body>
</html>