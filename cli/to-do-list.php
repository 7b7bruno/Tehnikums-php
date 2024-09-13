<?php 
    $name = readline("Ievadi savu vārdu:\n");
    echo "Your name is $name";
    $x = 0;
     do {
        echo "Number: $x"; 
        if(readline("") == "N") {
            break;
        }
     }
     while ($x <= 100);
?>