<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Form Test</title>
    <link rel="stylesheet" type="text/css" href="main.css"/>
</head>

<body>
    <div id="content">
        <h1>Contact me</h1>
        <form action="#" method="post">
        <input type="hidden" name="action" value="process_data"/>

        <label>Name:</label>
        <input type="text" name="name" 
               value="<?php echo htmlspecialchars($name); ?>"/>
        <br />

        <label>E-Mail:</label>
        <input type="email" name="email" 
               value="<?php echo htmlspecialchars($email); ?>"/>
        <br />
        
        <label>Subject:</label>
        <select name="subject">
            <option value="Pick one..." <?php if ( $subject == "Pick one..." )         {echo $selected;} ?> >Pick one...</option>
            <option value="Inquiry"     <?php if ( $subject == "Inquiry" )  {echo $selected;} ?> >Inquiry</option>
            <option value="Hello"       <?php if ( $subject == "Hello" )    {echo $selected;} ?> >Hello</option>
            <option value="Feedback"    <?php if ( $subject == "Feedback" ) {echo $selected;} ?> >Feedback</option>
        </select>
        <br />
        
        <label>message:</label><br /><br />
        <textarea name="comments" placeholder="Enter your text here please..."><?php if ( !empty($comments)) { echo $comments; } else { echo ""; } ?></textarea>
        

        <label>&nbsp;</label>
        <input type="submit" value="Submit" />
        <br />

        </form>

        <h2>Message:</h2>
        <p><?php if ( empty($error_message)) { echo nl2br($display); } else { echo $error_message; } ?></p>

    </div>
</body>
</html>