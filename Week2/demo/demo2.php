<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $my_string = 'hello';
            echo $my_string . " world";
            echo '<br />';
            // fastest way to output
            echo $my_string , ' world' ;
            echo '<br />';
            /*
             * Multi line comments
             */
            echo '$my_string world';
            echo '<br />';
            echo "$my_string world";
            
            
            echo '<h1>', $my_string , ' world</h1>' ;
            
        ?>
    </body>
</html>
