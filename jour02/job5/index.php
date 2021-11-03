<?php

for($index=2; $index <= 1000; $index++) {
    $nbdiviseurs=0;
    
//si jindex = 2 alors nbdiviseur = 1 car une seule condition est donnée, si jIndex=1 alors il est divisible par 1 ET LUI-MM donc 2nb de diviseurs (lui-mm et 1) et vice versa
    for($jIndex=2; $jIndex<=$index; $jIndex++){
        if ($index % $jIndex==0) {
            $nbdiviseurs++;
        }
    }

        if ($nbdiviseurs==1){
            echo $index."</br>";
        }
}


// $index=2;
// $jIndex=1;
// $nbdiviseurs=0;

// while ($index <= 1000) {
//     while ($jIndex<=$index) {

//         if ($index % $jIndex==0) 
//             $nbdiviseurs++;
        
//             $jIndex++;
        
//     }

//     if ($nbdiviseurs==2){
//         echo $index."<br/>";
//     }
//     $jIndex=1;
//     $nbdiviseurs=0;
//     $index++;
// }
?>
