<?php

$str="salut c'est laura";
$char="c";
echo $str. "<br/>";
echo occurrences ($str, $char);


function occurrences ($str, $char) {
    for($index=0; isset($str[$index])==true; $index++){
            $nbchar=0;

        for($totalchar=0; isset($str[$totalchar])==true; $totalchar++){
            if (($str[$totalchar])==$char){
                $nbchar++;
            } 
        } 

        return ($nbchar);
        } 
}


//NOTES POUR MOI-MM: quand j'ai fait for($char=0; isset($str[$char])==true; $char++) au lieu de totalchar au départ => il me donnait l'entièreté des charactères présents dans ma chaines (c'était sans le IF que j'ai rajouté après !!!!! juste le $nbchar après) : je devais donc rajouter une condition que si dans la totalité de ces charactères il y en avait 1 qui ressemblait à la valeur que je mettais dans $char ALORS le compteur rajoutait +1

?>