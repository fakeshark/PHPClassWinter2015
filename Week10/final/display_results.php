<?php  //Brian MacDonald Final Exam 201520_SE266.54 Web Dev. using PHP & MySQL ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
         <title>Mailing List Results</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
        <?php 
        
        
            $email = filter_input(INPUT_POST, 'email');
            $phone = filter_input(INPUT_POST, 'phone');
            $heard_from = filter_input(INPUT_POST, 'heard_from');
            $contact_via = filter_input(INPUT_POST, 'contact_via');
            $comments = filter_input(INPUT_POST, 'comments');
            
            
        include './classes/Validation.class.php';
        include './classes/Database.class.php';
        include './classes/Messages.class.php';
        include './classes/Util.class.php';

        $validate = new Validation();
        $database = new Database();
        $messages = new Messages();
        $util = new Util();
        
                if ($util->isPost()) {

            if (!$validate->fieldIsNotEmpty($email)) {
                $messages->addError('Email is a required field.');
            }

            if (!$validate->emailIsValid($email)) {
                $messages->addError('Email is not valid.');
            }

            if (!$validate->fieldIsNotEmpty($phone)) {
                $messages->addError('Phone is a required field.');
            }
            
            if (!$validate->phoneIsValid($phone)) {
                $messages->addError('Phone number is invalid.');
            }
            
            if (!$validate->fieldIsNotEmpty($heard_from)) {
                $messages->addError('&quot;How Did You Hear About Us&quot; is a required field.');
            }
            
            if (!$validate->fieldIsNotEmpty($contact_via)) {
                $messages->addError('&quot;Contact Via&quot; is a required field.');
            }

            if ($messages->hasErrors()) {
                $messages->displayErrorMsgs();
                include './index.php';
                exit();
            }
        }
        
        ?>
       <div id="content">
            <h1>Account Information</h1>

            <label>Email Address:</label>
            <span><?php echo $email; ?></span><br />
            
             <label>Phone:</label>
            <span><?php echo $phone; ?></span><br />

            <label>Heard From:</label>
            <span><?php echo $heard_from; ?></span><br />

            <label>Contact Via:</label>
            <span><?php echo $contact_via; ?></span><br /><br />

            <span>Comments:</span><br />
            <span><?php echo $comments; ?></span><br />
            
            <?php
            if ($database->insertAccount($email, $phone, $heard_from, $contact_via, $comments)) {
                echo 'Data was entered into database';
            } else {
                echo 'Data was NOT entered into the database';
            }
            ?>

        </div>
    </body>
</html>
