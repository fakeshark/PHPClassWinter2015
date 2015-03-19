<?php

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