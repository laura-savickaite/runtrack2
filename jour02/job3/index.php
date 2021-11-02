<?php

$index=0;

while ($index <= 100){

    if($index<=20){
        echo "<i>$index</i><br />";
    }
    //lui est plus exceptionnel - dans ce cas on le met avant celui qui est en-dessous (le elseif 25/50) sinon le php ne le lira pas = une question d'ordre
    elseif($index==42){
        echo ("LaPlateforme_<br/>");
    }
    elseif(($index>=25) && ($index<=50)){
        echo "<u>$index</u><br/>";
    }
    
    else{
        echo "$index <br/>";
       } 

        $index++;
}

?>