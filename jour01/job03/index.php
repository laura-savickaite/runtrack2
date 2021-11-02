<?php
    $string = "ceci est une string";
    $booleen=true;
    $entier = 4;
    $decimal = 5.7;


//essai perso pour les arrays
    $job03 = array ("$string", "$booleen", "$entier", "$decimal");
// afficher avec print_r ou var_dump
    print_r($job03);

    //ce qui est demandé par l'intra
    echo "<table>
            <tr>
                <th>type</th>
                <th>nom</th>
                <th>valeur</th>
            </tr>
            <tr>
                <td>string</td>
                <td>$ string</td>
                <td>ceci est une string</td>
            </tr>
            <tr>
                <td>bool</td>
                <td>$ booleen</td>
                <td>true</td>
            </tr>
            <tr>
                <td>entier</td>
                <td>$ entier</td>
                <td>4</td>
            </tr>
            <tr>
                <td>decimal</td>
                <td>$ decimal</td>
                <td>5.7</td>
            </tr>
    </table>"
?>