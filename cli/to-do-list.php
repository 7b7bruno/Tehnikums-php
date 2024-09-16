<?php 
    $taskList = ["izpildīt mājasdarbu", "aiziet gulēt laicīgi"];

    $continue = "Y";

    do {
        $choice = readline("Izvēlies darbību: ");

        switch($choice) {
            case 1: 
                foreach($taskList as $task) {
                    echo "";
                    for($i = 0; $i < count($taskList); $i++) {
                        $id = $i + 1;
                        echo "$id" . ". $taskList[$id]";
                    }
                    echo "";
                }
                break;
        }
    } while($continue == 'y')
?>