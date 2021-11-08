<?php

$str="BONJOUR JE SUIS LAURA un joyeux non anniversaire";
leetspeak ($str);

function leetspeak ($str) {
    for($index=0; isset($str[$index])==true; $index++){

        if (($str[$index])=="a" || ($str[$index])=="A"){
            echo 4;
        } elseif (($str[$index])=="b" || ($str[$index])=="B"){
            echo 8;
        } elseif (($str[$index])=="e" || ($str[$index])=="E"){
            echo 3;
        } elseif (($str[$index])=="g" || ($str[$index])=="G"){
            echo 6;
        } elseif (($str[$index])=="l" || ($str[$index])=="L"){
            echo 1;
        } elseif (($str[$index])=="s" || ($str[$index])=="S"){
            echo 5;
        } elseif (($str[$index])=="t" || ($str[$index])=="T"){
            echo 7;
        } else {
            echo $str[$index];
        }
    }
    return ($str);
}
?>