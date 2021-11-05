<?php
$str="Certaines choses changent, et d'autres ne changeront jamais.";
$str2="";

$index=0;
while (isset($str[$index])==true) {
    echo $str[$index];
    $index++ ;
}
echo $index;

//une boucle qui trouve le dernier index
//une boucle qui va décaller tout de +1
// $index DERNIER =$index[0];

?>