<?php 
    function reverse_string($str) {
        $len = strlen($str);
        $returnString = "";
        for($i = $len; $i >= 0; $i--) {
            $returnString = $returnString . substr($str, $i, 1);
        }
        return $returnString;
    }

    echo reverse_string('abcdef');

    $a = function() {

    };
    $b = function() {
        return "job done";
    };
    $c = function() use ($var) {
        return $var;
    };
    $d = function() use ($a, $b, $c) {
        return $a . $b . $c;
    };
    function e($var = "empty string") {
        return $var;
    };
?>