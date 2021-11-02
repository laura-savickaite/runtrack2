<?php
$index=1;

while ($index<=100){

        if (($index%5 == 0) && ($index%3 == 0)) {
           echo ("FizzBuzz <br/>");
         } elseif ($index%3 == 0) {
              echo ("Fizz <br/>");
            }
          elseif ($index%5 == 0) {
             echo ("Buzz <br/>");
         }
        else {
        echo "$index <br/>"; 
        }
 
        $index++;

}
?>