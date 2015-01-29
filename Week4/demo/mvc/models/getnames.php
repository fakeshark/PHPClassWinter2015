<?php
   $dbs = $db->prepare('select * from demo');  
        
    $names = array();
    
    if ( $dbs->execute() && $dbs->rowCount() > 0 ) {
          
        $names = $dbs->fetchAll(PDO::FETCH_ASSOC);
    }
