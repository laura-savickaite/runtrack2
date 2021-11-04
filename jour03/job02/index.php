<?php

$str="Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";

var_dump($str);

$index=0; //mon index counter de char

//echo $str[60];

while (isset($str[$index*2])==true) {
    echo $str[$index*2];
    $index++;
}
?>