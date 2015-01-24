<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php        
        $myvar = filter_input(INPUT_GET, 'p');
        
         if ( $myvar === '1' ) {
            echo 'Num 1'; 
         } else {
             echo 'my page title';
         }   
        ?>
    </body>
</html>
