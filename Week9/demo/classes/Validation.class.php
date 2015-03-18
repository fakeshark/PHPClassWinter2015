<?php
/**
 * Description of Validation
 *
 * @author GFORTI
 * 
 * Classes start with the class keyword and a class name.
 * good pratice to start the class name with a Captial
 * 
 *  class ClassName {
 * }
 * 
 * functions in the class work just like functions you have
 * created in PHP.  Difference is in a class you can access them with
 * the $this keyword.
 * 
 * $this is a reference to the class itself
 * 
 * call a function inside of the class like this
 * 
 * $this->function();
 * 
 * Same goes for a variable
 * 
 * $this-variable;
 */
class Validation {
    
    function emailIsValid( $email ) {
        if ( filter_var($email, FILTER_VALIDATE_EMAIL) != false ) {
           return true;
        } else {
            return false;
        }
   }
    
   
   function fullNameIsValid( $name ) {
        if ( !empty($name) ) {
            return true;
        } else {
            return false;
        }
    }
    
}