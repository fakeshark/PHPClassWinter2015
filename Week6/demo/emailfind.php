<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            if ( !empty($_POST) ) {
                
                $email = filter_input(INPUT_POST, 'email');
                $pdo = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3308;", "root", "");
                $dbs = $pdo->prepare('select * from demo where email = :email');  
                $dbs->bindParam(':email', $email, PDO::PARAM_STR);
                
                if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                        echo '<h1> Email was found</h1>';
                } else {
                     echo '<h1> Email <strong>NOT</strong> Found</h1>';
                }                
            }        
        ?>
        
          <form action="#" method="post">            
           email: <input type="text" name="email" value="" />            
            <input type="submit" value="submit" />            
        </form>
        
        
    </body>
</html>