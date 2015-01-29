<?php
    $singleUser = array();
    $singleUser['name'] = '';
    $singleUser['email'] = '';
    
    $id = filter_input(INPUT_GET, 'id');
    
    $dbs = $db->prepare('select * from demo where id = :id');
    $dbs->bindParam(':id', $id, PDO::PARAM_INT);
    
    if ( $dbs->execute() && $dbs->rowCount() > 0 ) {                
        $singleUser = $dbs->fetch(PDO::FETCH_ASSOC);
    }
