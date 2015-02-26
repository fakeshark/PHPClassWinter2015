<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        
        <?php
        
            $comments = filter_input(INPUT_POST, 'comments');
        
            $comments = htmlspecialchars($comments);
            
            echo '<p>',nl2br($comments), '</p>'; 
        ?>
                
        <form action="#" method="post">            
        <textarea name="comments"><?php echo nl2br($comments); ?></textarea>
        <input type="submit" value="submit" />         
        </form>
        
    </body>
</html>
