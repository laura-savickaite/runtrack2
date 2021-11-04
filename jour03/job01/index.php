<?php

$tableau=array(200, 204, 173, 98, 171, 404, 459);

var_dump ($tableau);
// echo $tableau[0];

// $index=0; //mon index counter

for($index=0; $tableau[$index]==true; $index++) {
    if ($tableau[$index]%2==0){
        echo $tableau[$index]. "est pair <br/>";
    } else {
        echo $tableau[$index]. "est impair<br/>";
    }
}

?>