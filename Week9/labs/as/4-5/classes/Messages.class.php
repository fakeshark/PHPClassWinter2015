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
class Messages {
    
    private $errors = array();
    
    public function addError( $err_msg ) {
        $this->errors[] = $err_msg;
    } 
            
    public function displayErrorMsgs() {
        if ( $this->hasErrors() ) {
           foreach ($this->errors as $err) {
             echo '<p>', $err, '</p>'; 
           }                    
       }
   }
   public function displaySucessMsg($msg) {
       if ( is_string($msg) && !empty($msg) ) {
           echo '<h1>', $msg , '</h1>';
       }
   }
   
   public function hasErrors() {
        if ( count($this->errors) > 0 ) {
            return true;
        }  
        return false;
   }
    
}