<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Insert</title>
    </head>
    <body>
<?php
    $db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3308;", "root", "");
  
    $dbs = $db->prepare('insert demo set name = :name, email = :email');  
    
    $name = 'test';
    $email = 'test@test.com';
    
    $dbs->bindParam(':name', $name, PDO::PARAM_STR);
    $dbs->bindParam(':email', $email, PDO::PARAM_STR);
    
    
    if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
            echo '<h1> user was added</h1>';
    } else {
         echo '<h1> user <strong>NOT</strong> added</h1>';
    }
    
    
    var_dump($db);
?>
    </body>
</html>
