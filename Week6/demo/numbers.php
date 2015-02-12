<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
            $int = 10;
            //is_numeric($int)
            $flt = 14.56;
            
            $fltint = intval($flt); // 14
            
            $string = '43534534dsfsdfsd';
            $bool = true;
            $bool2 = false;
            
            //echo round($flt);
            
            echo intval($flt);
            echo '<br />';
            echo intval($string);
            echo '<br />';
            echo intval($bool);
            echo '<br />';
            echo intval($bool2);
            
        
        ?>
    </body>
</html>
