<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>

        <?php

        // do error handling before you continue

	        $email      = filter_input(INPUT_POST, 'email');
	        $password   = filter_input(INPUT_POST, 'password');
                

	        $error_message = '';

	        // Validate email is not empty.
	        // Validate email is string data type.

	        if (empty($email)) {
			$error_message  .= "Email is a required field.<br />";
			}

			if (!is_string($email)) {
			$error_message  .= "Email field must contain valid data.<br />";
			} 

	        // Validate email has been entered in the correct format.


	            
	        // Validate password is not empty.
	        // Validate password is string data type.

	        if (empty($password)) {
			$error_message  .= "Password is a required field.<br />";
			}

			if (!is_string($password)) {
			$error_message  .= "Password field must contain valid data.<br />";
			} 

	        // Validate password length to be at least 5 characters long.

	        if ( strlen($password) <= 4 ) {
	        $error_message  .= "Password must be at least five characters long.<br />";
	        }

	        // Display error messages (if any) and re-display the form.

	        if ( !empty($error_message) ) {
            echo $error_message;
            include './signup.php';
            exit(); 
            }

           	// If form data is valid, attempt to add record to database.
		// bind the data before you execute
            
            //Check if email already exists in database
            
            $db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3306;", "root", "");

                $query = "SELECT * FROM signup where email == (email) VALUES ('$email')";
                
            $db->exec($query);
            
            if ( $db->rowCount() > 0 ) {
            	$error_message  .= "That user/email already exists in the database.<br />";
            }
	        // Display error messages (if any) and re-display the form.

	        if ( !empty($error_message) ) {
            echo $error_message;
            include './signup.php';
                exit();}

            $password = sha1($password);

            $dbs = $db->prepare('insert signup set email = :email, password = :password');  

            $dbs->bindParam(':email', $email, PDO::PARAM_STR);
            $dbs->bindParam(':password', $password, PDO::PARAM_STR);
            
            // if the execute works, then you will see the sucess message

            if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
            	echo '<h1> user ',$email, ' and password was added</h1>';
            } else {
            	echo '<h1> user ',$email, ' and password <strong>NOT</strong> added</h1>';
            }                  
        ?>
        <a href="signup.php">Return to login page</a>
    </body>
</html>