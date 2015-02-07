<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
<?php  

    if (!empty($err_msg)) { 
        echo $err_msg; 
        
    } 
?>
        
        <form action="simpleDataCollection.php" method="post">

    <div id="data">
        
        <label>Name:</label>
        <input type="text" name="fullname" value="<?php if ( !empty($name)) echo $name; ?>" />
        <br />
        <label>Phone #:</label>
        <input type="text" name="phone" value="<?php if ( !empty($phone)) echo $phone; ?>" />
        <br />
        <label>Email:</label>
        <input type="text" name="email" value="<?php if ( !empty($email)) echo $email; ?>" />
        <br />
        <label>Zip Code:</label>
        <input type="text" name="zip" value="<?php if ( !empty($zip)) echo $zip; ?>" />
        <br />
        
    </div>

    <div id="buttons">
        <label>&nbsp;</label>
        <input type="submit" value="Save" /><br />
    </div>

</form>
    </body>
</html>
