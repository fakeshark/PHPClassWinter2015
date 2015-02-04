<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $fname = filter_input(INPUT_POST, 'fname');
        var_dump($fname);
        ?>
        <form action="#" method="post" >
            Full Name:<input type="text" name="fmane" value="" />
            <input type="submit" value="Submit" />
        </form>
    </body>
</html>
