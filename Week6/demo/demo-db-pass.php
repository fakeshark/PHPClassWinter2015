<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /* Note not a working demo */
        
        $password = filter_input(INPUT_POST, 'pass');
        
        // add validaion
        
        $password = sha1($password);
        
$pdo = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3308;", "root", "");
$dbs = $db->prepare('select * from signup where email = :email and password = :password');  
$dbs->bindParam(':password', $password, PDO::PARAM_STR);
$dbs->bindParam(':email', $email, PDO::PARAM_STR);
            
 if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
            echo '<h1> user was found</h1>';
    } else {
         echo '<h1> user <strong>NOT</strong> found</h1>';
    }
            
              
        // remember that an empty string has is still a hash
        echo sha1('');
        ?>
    </body>
</html>