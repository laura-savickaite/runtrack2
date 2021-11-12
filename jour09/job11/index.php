<?php

$connect = mysqli_connect('localhost', 'root', '', 'jour08');

mysqli_set_charset($connect,"utf8");

$salles = mysqli_query ($connect, "SELECT `nom`, `capacite` FROM `salles`");

$recup = mysqli_fetch_all($salles, MYSQLI_ASSOC);

$capacite_moyenne = mysqli_query ($connect, "SELECT AVG(capacite) FROM salles;");

$recup2 = mysqli_fetch_all($capacite_moyenne, MYSQLI_ASSOC);

//echo "<pre>";var_dump ($recup, $recup2);echo "</pre>";

?>

<!DOCTYPE html>
<html>
<head>
<title>mysqli</title>
</head>

<body>
<table>
    <thead>
        <tr>
            <th>nom</th>
            <th>capacite</th>
            <th>capacite moyenne</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($salles as $value){
            echo "<tr><td>". $value ['nom'] ."</td>";
            echo "<td>". $value ['capacite'] ."</td>";
        }
        foreach ($capacite_moyenne as $value2){
            echo "<td>". $value2 ['AVG(capacite)'] ."</td></tr>";
        }
        ?>
    </tbody>
</table>
</body>

</html>