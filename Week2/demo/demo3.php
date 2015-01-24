<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            $my_var1 = 'hello';
            $my_var2 = 'world';
            
            $my_var3 =  $my_var1.$my_var2;
            
            echo $my_var3;
            
            $my_var1 .= ' world'; // $my_var1 = $my_var1 .' world';
            $my_var1 .= ' works';
            
            echo '<p>', $my_var1, '</p>';
            
            /*
             * use a period to concat two variables together
             */
            
            $err_msgs = '';
            
            if ( true ) {
                $err_msgs .= '<p> there is an error</p>';
            }
            
            if ( true ) {
                $err_msgs .= '<p> there is another error</p>';
            }
            
            echo $err_msgs;
            
        ?>
    </body>
</html>
