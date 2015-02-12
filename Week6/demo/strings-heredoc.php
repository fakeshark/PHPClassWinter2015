<?php
$my_str1 = 'string1';          
  //heredoc        
$str = <<<END
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>${my_str1}</title>
        <h1> hi ${my_str1}</h1>
    </head>
    <body>
END;
echo $str; 
?>