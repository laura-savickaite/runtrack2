<?php
$str="Dans l'espace, personne ne vous entend crier";

$index=0; //c'est mon index counter de char

// var_dump ($str); //à titre informatif pour savoir cb de char il y a dans ma string (pour mon résultat final) = 44

while (isset($str[$index])==true) {
    echo $str[$index];
    $index++;
}

//on le sort puisque à la fin de la boucle while index n'est plus égal à 0 mais donc la valeur qu'il a compté dans la boucle
echo "<br/>".$index;

?>