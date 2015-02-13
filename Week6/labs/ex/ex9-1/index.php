<?php
if (isset($_POST['action'])) {
    $action =  $_POST['action'];
} else {
    $action =  'start_app';
}

switch ($action) {
    case 'start_app':
        $message = 'Enter some data and click on the Submit button.';
        break;
    case 'process_data':
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $error_message = "";

        /*************************************************
         * validate and process the name
         ************************************************/
        // 1. make sure the user enters a name
        // 2. display the name with only the first letter capitalized
        if (empty($name)) {
        $error_message  .= "Name is a required field.<br />";
        }

        if (!is_string($name)) {
        $error_message  .= "Name field must contain valid data.<br />";
        }
        
         $fName = ucfirst($name);
         $space = ' ';
         $fNameSubString = strpos($fName, $space);
         $firstName = substr($fName, 0, $fNameSubString);

        /*************************************************
         * validate and process the email address
         ************************************************/
        // 1. make sure the user enters an email
        // 2. make sure the email address has at least one @ sign and one dot character
            if (empty($email)) {
                $error_message  .= "Email is a required field.<br />";
                    }
            if (!is_string($email)) {
                $error_message  .= "Email field must contain valid data.<br />";
            }
            if ( filter_var($email, FILTER_VALIDATE_EMAIL) == false ) {
                $error_message  .= "Invalid email formatting.<br />";
            }
        /*************************************************
         * validate and process the phone number
         ************************************************/
        // 1. make sure the user enters at least seven digits, not including formatting characters
        // 2. format the phone number like this 123-4567 or this 123-456-7890
            
                $justNums = preg_replace("/[^0-9]/", '', $phone);
                $phone = $justNums;
                //eliminate leading 1 if its there
                if (strlen($phone) == 11) {
                $phone = preg_replace("/^1/", '',$phone);
                }

                //if we have 10 digits left, it's probably valid.
                if (strlen($phone) != 10) {
                $error_message  .= "Phone Number is an invalid length. must be 10 characters long.<br />";
                } 
                
                if (!is_numeric($phone)) {
			$error_message  .= "Phone must be a valid number.<br />";
                } 

        /*************************************************
         * Display the validation message
         ************************************************/
        $message =  "Hello $firstName,
            
                    Thank you for entering this data:
                    
                    Name: $name
                    Email: $email
                    Phone: $phone
                        $error_message";
        break;
}
include 'string_tester.php';
?>