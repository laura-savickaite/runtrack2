<?php

$str="On n'est pas le meilleur quand on le croit mais quand on le sait";

//$index=0; //mon index counter

$dic=array (
    "consonnes" => ["n","t", "p", "s", "l", "m", "r", "q", "d"],
    "voyelles"=>["O", "o", "e", "a", "i", "u"]
);

    //var_dump ($dic);
    $compteur=0;
    $compteur2=0;

for ($index=0; isset($str[$index])==true; $index++){
    //["consonnes"] = seulement la précision de quel array dans dic et le [$cons] similaire à mon [$index] donc le vrai index
    for ($cons=0; isset($dic["consonnes"][$cons])==true; $cons++){
        if($str[$index]==$dic["consonnes"][$cons]){
            $compteur++;
        }
    }

    for ($voy=0; isset($dic["voyelles"][$voy])==true; $voy++){
        if($str[$index]==$dic["voyelles"][$voy]){
            $compteur2++;
        }
    }
}
echo $compteur."<br/>";
echo $compteur2;

// while (isset($str[$index])==true) {
//     echo $str[$index];
//     $index++;
// }
// echo $index;

    // for str index
    // for string dans boucle consonnes
    // for string dans boucle voyelles


?>