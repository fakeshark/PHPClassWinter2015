<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //  $_POST
        
            
        /*
         * recommend 3 step process
         * collect the data
         * validate the data
         * use the data
         */
        
            include './validation.php';
            
           /*
            * re-display the form if there are errors            * 
            */ 
            if ( !empty($err_msg) ) {
                include './POST.php';
                exit();
            }
        
            
            /*
             * display the data
             */
             if ( isset($_POST['fname'] ) ) {
                echo $_POST['fname'];
            }
            echo '<br />';
             if ( isset($_POST['email'] ) ) {
                echo $_POST['email'];
            }
            echo '<br />';
             if ( isset($_POST['number'] ) ) {
                echo $_POST['number'];
            }
            
        ?>
    </body>
</html>
