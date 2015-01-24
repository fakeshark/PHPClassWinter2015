<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        
        <a href="?name=gabriel&email=test@test.com">test link</a>
        
        <?php
        /*
         * $_GET is a super global variable built in PHP
         * $GET variables are added in a key:pair array
         * when get params are passed in the url.
         * 
         * Access the $_GET variable keys like so
         * $_GET['name']
         * when the url has a name key
         * index.php?name=test
         */
            var_dump($_GET);
            
            //$_GET['name']
        
        if ( isset($_GET['name']) ) {
             echo $_GET['name'];
        }   
            
         echo '<br />';
          if ( isset($_GET['email']) === true ) {
             echo $_GET['email'];
        }
    
                 
        ?>
    </body>
</html>