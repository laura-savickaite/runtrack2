<?php

// if ($_POST["gras"]){
//     echo gras($_POST["str"]);
// }
// if ($_POST["cesar"]){
//     cesar($_POST["str"]);
// }
// if ($_POST["plateforme"]){
//     plateforme($_POST["str"]);
// }

// en haut c'est plus ou moins pareil que le if d'en bas (à vérifier)

// if (isset($_POST["select"])){
//     echo gras($_POST["str"]);
//     cesar($_POST["str"]);
//     plateforme($_POST["str"]);
// }                                                      



function gras ($str) {
    $majuscules=array("A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M", "N", "O", "P", "Q", "R", "S", "T", "U", "V", "W", "X", "Y", "Z");
    if (isset($_POST['valider']))
    {
        for($index=0; isset($str[$index])==true; $index++){
            for ($maj=0; isset($majuscules[$maj])==true; $maj++){
                if($str[$index]==$majuscules[$maj]){
                    echo "<b>" . $str. "<b/>";  
                } 
            }
        }
    } 
}

gras($_POST['str']);

// $decalage=2;
// function cesar ($str, $decalage){
//     for($index=0; isset($str[$index])==true; $index++){

//         UC
// }

// function plateforme ($str){
//     for($index=0; isset($str[$index])==true; $index++){
//         if (jsp si isset derniers index = me)
//         {
//             echo $str+"_";
//         }
// }
?>

<form action="index.php" method="post">
    <div>
        <label for="texte">texte :</label>
            <input type="text" id="str" name="str">
    </div>
    <div>
        <label for="select">select :</label>
            <select name="select" id="select">
                <option value="">--Please choose an option--</option>
                <option value="gras">Gras</option>
                <option value="cesar">Cesar</option>
                <option value="plateforme">Plateforme</option>
            </select>
    </div>
    <button type="submit" name="valider">Submit</button>
</form>