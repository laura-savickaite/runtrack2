<?php


function gras ($str){
    for($index=0; isset($str[$index])==true; $index++){

        if (($str[0])=="A" || ($str[0])=="B" || ($str[0])=="C" || ($str[0])=="D" || ($str[0])=="E" || ($str[0])=="F"|| ($str[0])=="G"|| ($str[0])=="H"|| ($str[0])=="I"|| ($str[0])=="J"|| ($str[0])=="K"|| ($str[0])=="L"|| ($str[0])=="M"|| ($str[0])=="N"|| ($str[0])=="O"|| ($str[0])=="P"|| ($str[0])=="Q"|| ($str[0])=="R"|| ($str[0])=="S"|| ($str[0])=="T"|| ($str[0])=="U"|| ($str[0])=="V"|| ($str[0])=="W"|| ($str[0])=="X"|| ($str[0])=="Y"|| ($str[0])=="Z")
        {
            echo "<b>". $str ."</b>";
        }
}

// $decalage=2;
// function cesar ($str, $decalage){
//     for($index=0; isset($str[$index])==true; $index++){

//         UC
// }

function plateforme ($str){
    for($index=0; isset($str[$index])==true; $index++){

        if (
        {
            echo $str+"_";
        }
}
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
    <button type="submit">Submit</button>
</form>