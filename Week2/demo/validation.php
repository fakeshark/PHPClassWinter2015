<?php
   $name = '';
   $email = '';
   $num = 0;           
   $err_msg = '';
   /*
    * use this if statement to only check $_POST values
    * if the $_POST array is not empty
    */
    if ( !empty ( $_POST ) ) {             
        // collect the data
        $name = $_POST['fname'];
        $email = $_POST['email'];
        $num = $_POST['number'];
        // validate the data
        if ( !is_string($name) || empty($name) ) {
            $err_msg .= '<p>Please enter a name</p>';
        }
        if ( !is_string($email) || empty($email) ) {
            $err_msg .= '<p>Please enter an email</p>';
        }
        if ( !is_numeric($num) || empty($num) ) {
            $err_msg .= '<p>Please enter a number</p>';
        }
    }
    
        // make sure to only display the error message 
        // if it's not empty
        if ( !empty($err_msg) ) {
            echo '<h1>', $err_msg, '</h1>';
        }
