
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>
            <?php 
                $myvar = $_GET['p'];
               // $myvar = true;
                //$myvar = 'string';
                //$myvar = 10;
                
                if ( $myvar === '1' ) {
                   echo 'Num 1'; 
                } else {
                    echo 'my page title';
                }                
            
            ?>
        
        </title>
    </head>
    <body>
        <?php
        // put your code here
        /* 
         * phpinfo();        
        */
        echo '<p>Hey hows it going</p>';
        
        ?>
    </body>
</html>