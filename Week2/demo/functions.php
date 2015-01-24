<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // useful functions, use PHP.net and search for
        // more information and examples.
        /*
        is_string - check if variable is a type string
        is_numeric - check if a variable is of type numeric
        empty - checks to see if a variable does exist and that it's not null/empty
        exit(); - stops the application from executing
        include - inculde php code from a different file
        rand - return a random number between a min and a max
        */
        
        $start_num = rand(5, 15);
        echo $start_num;
        ?>
    </body>
</html>