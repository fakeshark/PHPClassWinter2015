<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
if (isset($_POST['action'])) {
    $action = $_POST['action'];
} else {
    $action =  'start_app';

    $name = '';
    $email = '';
    $subject = '';
    $comments = '';
    $error_message = '';
}

switch ($action) {
    case 'start_app':
        $display = 'Enter some data and click on the Submit button.';
        break;
    case 'process_data':
        $name = filter_input(INPUT_POST, 'name');
        $email = filter_input(INPUT_POST, 'email');
        $subject = filter_input(INPUT_POST, 'subject');
        $comments = filter_input(INPUT_POST, 'comments');
        $error_message = "";
        $selected = 'selected="selected"';

    //validate form data input        
        // Validate name is not empty.
        // Validate name is string data type.
        
        if (empty($name)) {
        $error_message  .= "Name is a required field.<br />";
        }

        if (!is_string($name)) {
        $error_message  .= "Name field must contain valid data.<br />";
        }

        // Validate email is not empty.
        // Validate email is string data type.
        // Validate email has been entered in the correct format.
        
        if (empty($email)) {
        $error_message  .= "Email is a required field.<br />";
        }

        if (!is_string($email)) {
        $error_message  .= "Email field must contain valid data.<br />";
        }

        if ( filter_var($email, FILTER_VALIDATE_EMAIL) == false ) {
        $error_message  .= "Email field must contain valid data.<br />";
        }
        
        if ($subject == "Pick one...") {
        $subject = "empty";
        }
        
        if ( empty($comments) ) {
        $error_message  .= "You must enter a comment/message.<br />";
        }

        $display =  "Hello $name,
            
                    Thank you for entering this data:
                    
                    Name: $name
                    Email: $email
                    Subject: $subject
                    Message: $comments";
        break;
}
include 'formtest.php';
?>
    </body>
</html>
