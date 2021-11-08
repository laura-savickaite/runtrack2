<?php

echo bonjour ($jour=false);


function bonjour ($jour) {
    if ($jour==true){
        return ("Bonjour");
    }
    elseif ($jour==false) {
        return ("Bonsoir");
    }
    return (-1);
}

?>