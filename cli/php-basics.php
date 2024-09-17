<?php 
    for ($x = 0; $x <= 10; $x++) {
        echo $x;
    }
    echo "\n";
    $people = array(
        ["Jānis", 18],
        ["Emīls", 17],
        ["Edgars", 13]
    );
    foreach($people as $person) {
        echo "Vārds: $person[0], Vecums: $person[1] \n";
    }    
?>