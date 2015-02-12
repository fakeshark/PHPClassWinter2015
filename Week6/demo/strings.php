<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $str = 'hello';
            
            $str2 = "$str world";
            $str3 = '$str world';
            
            echo $str2;
            echo '<br />';
            echo $str3;
            echo '<br />';
            $password = 'test';
            
            if (  strlen($password) < 4 ) {
                echo '<p>pass must be greater than 3 chars</p>';
            }
           echo  str_shuffle($password);
            echo '<br />'; echo '<br />';
           
          echo  md5($password);
          echo '<br />'; echo '<br />';
          echo  sha1($password);
           echo '<br />'; echo '<br />';
          echo  sha1(sha1($password));
            
        
        ?>
    </body>
</html>