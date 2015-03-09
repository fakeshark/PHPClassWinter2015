<?php
    include './functions.php';
    
    $error_msgs = array();
    $sucess_msg = '';
    
    $fullname = '';
    $email = '';
    $phone = '';
    $comments = '';
    
    if ( !empty($_POST) ) {
        
        $fullname = filter_input(INPUT_POST, 'fullname');
        $email = filter_input(INPUT_POST, 'email');
        $comments = filter_input(INPUT_POST, 'comments');
        $phone = filter_input(INPUT_POST, 'phone');
        
        
        if ( !emailIsValid($email) ) {
            $error_msgs[] = 'Email is not Valid.';
        }
        
        if ( !fullNameIsValid($fullname) ) {
            $error_msgs[] = 'Please enter your name.';
        }
        
        if ( !phoneIsValid($phone) ) {
            $error_msgs[] = 'Please enter your Phone number in format xxx-xxx-xxxx.';
        }
        
        
        if ( count($error_msgs) == 0 ) {
            //add to database
            
            $addedComments = addNewComments($fullname, $email, $comments, $phone );
            
            if ( $addedComments === true  ) {
                $sucess_msg = 'Comments were added.';
            } else {
                $error_msgs[] = 'Comments were NOT added.';
            }
        }
        
        
    }
    
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>    
        
        <div class="error_message">
            <?php            
                displayErrorMsgs($error_msgs);            
            ?>
        </div>
        
        <div>
            <?php 
                displaySucessMsg($sucess_msg);
            ?>
        </div>
        
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
                
                 <p>
                    <label>Phone:</label>
                    <input type="text" name="phone" value="<?php echo $phone; ?>" />
                </p>
                <p>Comments: (optional)</p>
                <textarea name="comments" rows="4" cols="50"><?php echo $comments; ?></textarea>

                <p> <input type="submit" value="Submit" /> </p>
            </fieldset>
        </form> 
    </body>
</html>