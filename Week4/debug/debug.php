<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        $page = filter_input(INPUT_GET, 'page');
        
        $currentPage = '';
        
        
        if ( $page == $currentPage ) {
            
            echo 'this is the right page';
            
        } else {
        
        echo 'this is the wrong page';
        var_dump($page);
        }
        ?>
    </body>
</html>