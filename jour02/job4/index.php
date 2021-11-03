<?php
$index=1;

while ($index<=100){
    // == 0 car on parle du RESTE de la division ex: 14/5 = 2 -- 14-10= 4 (mon reste de la division) donc =/= 0 ainsi mon ordinateur ne prend pas en compte 14 et passe au suivant en suivant la même méthode de diviser
        if (($index%5 == 0) && ($index%3 == 0)) {
           echo ("FizzBuzz <br/>");
         } elseif ($index%3 == 0) {
              echo ("Fizz <br/>");
            }
          elseif ($index%5 == 0) {
             echo ("Buzz <br/>");
         }
        else {
        echo $index. "<br/>"; 
        }
 
        $index++;

}
?>