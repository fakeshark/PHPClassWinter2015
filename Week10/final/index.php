<?php //Brian MacDonald Final Exam 201520_SE266.54 Web Dev. using PHP & MySQL  ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mailing List</title>
        <link rel="stylesheet" type="text/css" href="main.css"/>
    </head>
    <body>
        <?php
        if (!empty($_POST)) {
            $email = filter_input(INPUT_POST, 'email');
            $phone = filter_input(INPUT_POST, 'phone');
            $heard_from = filter_input(INPUT_POST, 'heard_from');
            $contact_via = filter_input(INPUT_POST, 'contact_via');
            $comments = filter_input(INPUT_POST, 'comments');
        } else {
            $email = "";
            $phone = "";
            $heard_from = "";
            $contact_via = "";
            $comments = "";
        }
        ?>
        <div id="content">
            <h1>Account Sign Up</h1>
            <form action="display_results.php" method="post">

                <fieldset>
                    <legend>Account Information</legend>
                    <label>E-Mail:</label>
                    <input type="text" name="email" value="<?php echo $email; ?>" class="textbox"/>
                    <br />

                    <label>Phone Number:</label>
                    <input type="text" name="phone" value="<?php echo $phone; ?>" class="textbox"/>
                </fieldset>

                <fieldset>
                    <legend>Settings</legend>

                    <p>How did you hear about us?</p>
                    <input type="radio" name="heard_from" <?php if ($heard_from == "Search Engine") {echo 'checked="checked"';} ?> value="Search Engine" />
                    Search engine<br />
                    <input type="radio" name="heard_from" <?php if ($heard_from == "Friend") {echo 'checked="checked"';} ?> value="Friend" />
                    Word of mouth<br />
                    <input type=radio name="heard_from" <?php if ($heard_from == "Other") {echo 'checked="checked"';} ?> value="Other" />
                    Other<br />

                    <p>Contact via:</p>
                    <select name="contact_via">
                        <option value="">Pick one...</option>
                        <option value="email"<?php if ($contact_via == "email") {echo 'selected="selected"';} ?> >Email</option>
                        <option value="text" <?php if ($contact_via == "text") {echo 'selected="selected"';} ?> >Text Message</option>
                        <option value="phone"<?php if ($contact_via == "phone") {echo 'selected="selected"';} ?> >Phone</option>
                    </select>

                    <p>Comments: (optional)</p>
                    <textarea name="comments" rows="4" cols="50"><?php echo $comments; ?></textarea>
                </fieldset>

                <input type="submit" value="Submit" />

            </form>
            <br />
        </div>
    </body>
</html>
