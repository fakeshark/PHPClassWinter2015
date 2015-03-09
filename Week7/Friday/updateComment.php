<?php
    include './functions.php';
    
    $id = filter_input(INPUT_POST, 'id');    
    $comment = getComment($id);
    
    
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        if ( count($comment) === 0) {
            echo 'No comment found';
            die();
        }
        
        print_r($comment);
        
        ?>
        
        
         <form action="#" method="post">
            <fieldset>
                <legend><h2>Update Comments</h2></legend>
                <p>
                    <label>E-Mail:</label>
                    <input type="text" name="email" value="<?php echo $email; ?>" />
                </p>
                <p>
                    <label>Name:</label>
                    <input type="text" name="fullname" value="<?php echo $fullname; ?>" />
                </p>
                
                 <p>
                    <label>Phone:</label>
                    <input type="text" name="phone" value="<?php echo $phone; ?>" />
                </p>
                <p>Comments: (optional)</p>
                <textarea name="comments" rows="4" cols="50"><?php echo $comments; ?></textarea>
                
                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                <p> <input type="submit" value="Submit" /> </p>
            </fieldset>
        </form> 
        
        
        
    </body>
</html>