<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
            if ( !empty($_POST) ) {
                print_r($_POST);
            }
        
            $pep = filter_input(INPUT_POST, 'pep');
            $mush = filter_input(INPUT_POST, 'mush');
            $olv = filter_input(INPUT_POST, 'olv');
            
            $checked = 'checked="checked"';
        ?>
       
<form action="#" method="post">
        
1. pep <input type="checkbox" name="pep" <?php if ($pep == 'on') echo $checked ?> /> <br />
2. mush <input type="checkbox" name="mush" <?php if ($mush == 'on') echo $checked ?> /> <br />
3. olv <input type="checkbox" name="olv" <?php if ($olv == 'on') echo $checked ?> /> <br />
            
<br /><input type="submit" value="Submit" />
</form>
    </body>
</html>