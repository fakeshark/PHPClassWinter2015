<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>User Display</title>
        <link rel="stylesheet" type="text/css" href="style.css" />
    </head>
    <body>
<?php   $db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3306;", "root", "");
        $dbs = $db->prepare('select * from users');  
        $rownum = 0;
    
    if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
          
    $users = $dbs->fetchAll(PDO::FETCH_ASSOC);} ?>
        
            <h2>Users:</h2>
            <table class="userTable">
                <tr>
                    <td>Row #:</td>
                    <td>User Name:</td>
                    <td>Phone #:</td>
                    <td>Email:</td>
                    <td>Zip Code:</td>
                </tr>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?php $rownum += 1; echo $rownum; ?></td>
                    <td><?php echo $user['fullname']; ?></td>
                    <td><?php echo $user['phone']; ?></td>
                    <td><?php echo $user['email']; ?></td>
                    <td><?php echo $user['zip']; ?></td>
                </tr>
            <?php endforeach; ?>
            </table><br /><br />
            <a href="simpleDataCollectionForm.php" class="button">Add user</a>
    </body>
</html>
