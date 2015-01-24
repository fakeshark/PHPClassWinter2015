<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        // do error handling before you continue
            $err_msg = '';
            if ( empty($_POST) ) {
               $err_msg = 'Please enter Data';
               include './add-user.php';
               exit();
            }
            
            
            // remember to change the port
             $db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3308;", "root", "");
  
            $dbs = $db->prepare('insert demo set name = :name, email = :email');  
            //collect the data to bind
            $name = $_POST['fullname'];
            $email = $_POST['email'];
            // you must bind the data before you execute
            $dbs->bindParam(':name', $name, PDO::PARAM_STR);
            $dbs->bindParam(':email', $email, PDO::PARAM_STR);
            
            // if the execute works, then you will see the sucess message
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                    echo '<h1> user ',$name, ' was added</h1>';
            } else {
                 echo '<h1> user ',$name, ' was <strong>NOT</strong> added</h1>';
            }       
        
           
        ?>
        
        <a href="add-user.php">Add user</a>
        <a href="view.php">View users</a>
    </body>
</html>
