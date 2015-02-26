<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        $arr = array();
        
        $arr[0] = 'hello';
        $arr[1] = 'world';
        $arr["cars"] = 'ford';
        
        print_r($arr);
        
        echo $arr[0] , ' ' , $arr[1] , ' ', $arr["cars"];
        
        
        foreach ($arr as $key => $value) {
            if ( $key === 2 ) break;
             echo '<br />', $key, ' =>',   $value ;    
        }
         
        
        ?>
    </body>
</html>