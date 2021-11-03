<?php

for($index=2; $index <= 1000; $index++) {
    $nbdiviseurs=0;
    

    for($jIndex=2; $jIndex<=$index; $jIndex++){
        if ($index % $jIndex==0) {
            $nbdiviseurs++;
        }
    }

        if ($nbdiviseurs==1){
            echo $index."</br>";
        }
}
?>
