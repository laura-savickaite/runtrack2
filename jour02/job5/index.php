<?php
    $index=0;

while ($index <= 1000) {

    if (!($index%1==0 && $index%$index==0)){
        echo $index. "<br/>";
    }

    // tout est divisible par 1 et soi-mm, il faut qu'il n'y ait que 2 diviseurs et deux diviseurs seulement

    // $nbdiviseurs == 2;
    
//    echo "$index <br/>";
   $index++;
}
?>