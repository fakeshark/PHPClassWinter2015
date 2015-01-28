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
             include './SimpleDataCollectionForm.php';
             exit();
        }
            
             $db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3306;", "root", "");
  
            $dbs = $db->prepare('insert demo set fullname = :fullname, phone = :phone, email = :email, zip = :zip');  
            //collect the data to bind
            $name = $_POST['fullname'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $zip = $_POST['zip'];
            // you must bind the data before you execute
            $dbs->bindParam(':fullname', $name, PDO::PARAM_STR);
            $dbs->bindParam(':phone', $phone, PDO::PARAM_STR);
            $dbs->bindParam(':email', $email, PDO::PARAM_STR);
            $dbs->bindParam(':zip', $zip, PDO::PARAM_STR);
            
            // if the execute works, then you will see the sucess message
            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
                    echo '<h1> user ',$name, ' was added</h1>';
            } else {
                 echo '<h1> user ',$name, ' was <strong>NOT</strong> added</h1>';
            }       
                  
        ?>
        
        <!-- <a href="add-user.php">Add user</a> -->
        <a href="simpleDataCollectionDisplay.php">View users</a>
    </body>
</html>
