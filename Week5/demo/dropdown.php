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
        
        $selected = 'selected="selected"';
        
        ?>

<form action="#" method="post">   
    <select name="cars">
        <option value="ford"    <?php if ( $car == "ford" )   echo $selected; ?> >ford</option>
        <option value="honda"   <?php if ( $car == "honda" )  echo $selected; ?> >honda</option>
        <option value="kia"     <?php if ( $car == "kia" )    echo $selected; ?> >kia</option>
    </select>
            
<br /><input type="submit" value="Submit" />
</form>
        
    </body>
</html>
