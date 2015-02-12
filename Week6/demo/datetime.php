<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        date_default_timezone_set('America/New_York');
        
            $today = date('m-d-y');
            $time = time() - 100000;
            
            $str2time = strtotime('11/12/14');
            
            
            echo $str2time;
            echo '<br />';
            //echo $today;
            
             echo date('m-d-y', $time);
             
             
             echo '<br />';
             
            $dat = new DateTime();
            $dat->setTimestamp($time);
            echo $dat->format('m-d-y');
        
        ?>
    </body>
</html>