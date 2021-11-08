<?php

$str="BONJOUR JE SUIS LAURA et c'est mon anniversaire let's go";
echo leetspeak ($str);

function leetspeak ($str) {
    for($index=0; isset($str[$index])==true; $index++){

        if (($str[$index])=="a" || ($str[$index])=="A"){
            $str[$index] = 4;
        } elseif (($str[$index])=="b" || ($str[$index])=="B"){
            $str[$index] = 8;
        } elseif (($str[$index])=="e" || ($str[$index])=="E"){
            $str[$index] = 3;
        } elseif (($str[$index])=="g" || ($str[$index])=="G"){
            $str[$index] = 6;
        } elseif (($str[$index])=="l" || ($str[$index])=="L"){
            $str[$index] = 1;
        } elseif (($str[$index])=="s" || ($str[$index])=="S"){
            $str[$index] = 5;
        } elseif (($str[$index])=="t" || ($str[$index])=="T"){
            $str[$index] = 7;
        } else {
            $str[$index];
        }
    }
    return ($str);
}
?>