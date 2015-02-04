

<h2> All Page </h2>


<?php
    foreach ($names as $key => $value) {
    
        echo '<p><a href="?view=details&id=',$value['id'],'">', $value['name'], '</a></p>';
        
    } 

