<?php

$a=5;
$b=6;
echo calcule ($a, "-", $b);




function calcule ($a,$operation,$b) {
    //$operation=(+)|| $operation=(-)|| $operation=(*) || $operation=(/) || $operation=(%));
    // $taboperation= array ("+", "*", "-", "%", "/");
    // for ($index=0; isset($taboperation[$index])==true; $index++) {
    //     if ($taboperation[$index]==$operation){
    //         return ($a + $operation +$b);
    //     }
    // }
    if ($operation == "+"){
        return ($a + $b);
    }
    elseif ($operation == "/"){
        return ($a / $b);
    }
    elseif ($operation == "-"){
        return ($a - $b);
    }
    elseif ($operation == "*"){
        return ($a * $b);
    }
    elseif ($operation == "%"){
        return ($a % $b);
    }
    return (-1);
}


?>