<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <form action="#" method="post">
        
        <?php
        
            var_dump($_POST);        
            $selectedState = filter_input(INPUT_POST, 'states');
        
            include './include-states.php';
            //shuffle($states);
           // sort($states);
            echo '<select name="states">';
            foreach ($states as $key => $value) {     
                if ( $selectedState == $key ) {
                    echo '<option value="',$key,'" selected="selected">',$value,'</option>';
                } else {
                    echo '<option value="',$key,'">',$value,'</option>';
                }
                
            }
            
             echo '</select>';
            
        ?>
            
            <input type="submit" value="submit" />
            </form>
    </body>
</html>