<?php
$str="Certaines choses changent, et d'autres ne changeront jamais.";


$var="";
for($index=0; isset($str[$index])==true; $index++){
    $actuel=$str[$index];
    $voisin=$str[$index+1];
    // echo $actuel;
    // echo $voisin; 




    foreach ($str as $actuel=>$voisin){
        echo $str;
    }

    
    }
   
    

    

    
    
// $str2="";


// $index=0;
// while (isset($str[$index])==true) {
//     echo $str[$index];
//     $index++ ;
// }
// echo $index;

//str de i est à 0
//str de i+1 à 1

//var_dump ($str);

// foreach ($str as $key=>$index){
    //     if($key != 'key3')$new[$key]=$index;
    // }




//une boucle qui trouve le dernier index
//une boucle qui va décaller tout de +1
// $index DERNIER =$index[0];

?>