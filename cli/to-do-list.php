<?php 
    static $taskList = ["izpildīt mājasdarbu", "aiziet gulēt laicīgi"];

    $continue = "Y";

    function readTasks($taskList) {
        $i = 0;
        foreach($taskList as $task) {
            echo "[$i] - $task \n";
            $i++;
        }
    }
    function addTask(&$taskList) {
        $task = readline("Kāds būs jaunais uzdevums? >> ");
        array_push($taskList, $task);
    }

    do {
        echo "[1] - apskatīt visus uzdevumus \n";
        echo "[2] - pievienot jaunu uzdevumu \n";
        echo "[0] - Iziet no programmas \n";

        $choice = readline("Izvēlies darbību: ");

        switch($choice) {
            case 1: 
                readTasks($taskList);
                break;
            case 2:
                addTask($taskList);
                break;
            case 0;
                $continue = 'N';
                break;
            default:
                break;
        }

        $continue = readline("Vai vēlies turpināt? [Y/N] >> ");
    } while($continue == 'Y')
?>