<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        /*
         * make sure you inculde the files on the page.
         * We named the classes with Camel Case words.
         * classname.class is not needed.  We just do this to know
         * we are inculding class file.
         */
         include './classes/Validation.class.php';
         include './classes/Messages.class.php';
         include './classes/Util.class.php';
         
         
         /*
          * To access the class we create a  a variable  equal to a new instance
          * of the class. $variables = new Class();
          */
         $validate = new Validation();
         $messages = new Messages();
         $util = new Util();
         
         $email = filter_input(INPUT_POST, 'email');
         $fullname = filter_input(INPUT_POST, 'fullname');
         
         
         /*
          * Notice to access the functions in the class
          * we use the variable name with he arrow (->)
          * and call the functions
          * 
          * $variable->function();
          * 
          * Whats great about classes is you can organize your code
          * and allows you to write less code on your processing page.
          * 
          */
         if ( $util->isPost() ) {
             
             if ( !$validate->emailIsValid($email) ) {
                 $messages->addError('email is not valid');
             }
             
              if ( !$validate->fullNameIsValid($fullname) ) {
                  $messages->addError('fullname is not valid');
             }
             
             
              if ( ! $messages->hasErrors()) {
               $messages->displaySucessMsg('No Errors Nice Job');
            }
             
         }
         
            $messages->displayErrorMsgs();
        
           
        ?>
        
        
         <form action="#" method="post">
            <fieldset>
                <legend><h2>Add Comments</h2></legend>
                <p>
                    <label>E-Mail:</label>
                    <input type="text" name="email" value="<?php echo $email; ?>" />
                </p>
                <p>
                    <label>Name:</label>
                    <input type="text" name="fullname" value="<?php echo $fullname; ?>" />
                </p>
                
                 
                <p> <input type="submit" value="Submit" /> </p>
            </fieldset>
        </form> 
    </body>
</html>