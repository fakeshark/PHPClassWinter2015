<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $car = filter_input(INPUT_POST, 'cars');
        var_dump($car);
        
        $checked = ' checked="checked"';
        
        ?>

<form action="#" method="post">   
        Ford <input type="radio" name="cars" value="ford"   <?php if ( $car == "ford" )   echo $checked; ?> ><br />
        Kia <input type="radio" name="cars" value="kia"   <?php if ( $car == "kia" )   echo $checked; ?> ><br />
        Honda <input type="radio" name="cars" value="honda"   <?php if ( $car == "honda" )   echo $checked; ?> ><br />            
<br /><input type="submit" value="Submit" />
</form>
        
    </body>
</html>
