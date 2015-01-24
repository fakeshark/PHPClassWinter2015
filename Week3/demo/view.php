<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Read</title>
    </head>
    <body>
        <?php
$db = new PDO("mysql:host=localhost;dbname=phpclasswinter2015; port=3308;", "root", "");
  
 $dbs = $db->prepare('select * from demo');  
        
    
    if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
          
        $results = $dbs->fetchAll(PDO::FETCH_ASSOC);
        
        /*
         * $arry["key"] = 'value';
      
        
        $array[0] = array(
            "id" => 1,
            "name" => 'test',
            "email" => "test@test.com"
        );
        */
       
        echo '<ul>';
        foreach ($results as $value) {
            
            echo '<li>', $value["name"], '</li>';
            // hint: the email column can also be displayed
        }
        echo '</ul>';
        
    } else {
        echo 'No results found';
    }
           
        
        ?>
    </body>
</html>