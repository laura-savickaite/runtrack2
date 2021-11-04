<?php

$str="Les choses que l'on possede finissent par nous posseder.";

//si on veut aller à l'envers au lieu de faire ++ qui part d'un index 0 à l'index dernier, on met -- pour aller à l'envers
for ($index=0; isset($str[$index]) == true; $index--){
    echo $str[$index];
}

?>