<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
            $passcode = sha1('Password!');
       if ( !empty($_POST) ){   
        $pass = sha1(filter_input(INPUT_POST, 'pass'));
       } else {
           $pass = "";
       }
        
        ?>
        
        <form action="#" method="post">
            
            Passcode: <input type="password" name="pass" value="" />
            
            <input type="submit" value="submit" />
           
            <?php 
            
            if ($passcode == $pass){
               echo 'Password is Valid';
            } else {
               echo 'Password is Invalid';
            }
                    
            ?>
            
        </form>
    </body>
</html>