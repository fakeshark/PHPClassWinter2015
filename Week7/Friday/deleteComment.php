<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            include './functions.php';  
            $id = filter_input(INPUT_GET, 'id');        
            
            $isDeleted = deleteComment( $id );
            
            if ( $isDeleted ) {
                echo "Comment Deleted";
            } else {
                 echo "Comment NOT Deleted";
            }
        ?>
    </body>
</html>