<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <h1> Add user </h1>
        <?php
        // put your code here
        if ( isset($err_msg) ) {
            echo '<p>',$err_msg,'</p>';
        }
        ?>   
        
        <form action="process-add-user.php" method="post">
            Name: <input name="fullname" value="" /> <br />
            Email: <input name="email" value="" /> <br />
            
            <input type="submit" value="Submit" />
        </form>
        
    </body>
</html>
