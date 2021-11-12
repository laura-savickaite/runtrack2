<?php

$connect = mysqli_connect('localhost', 'root', '', 'jour08');

mysqli_set_charset($connect,"utf8");

$etudiants = mysqli_query ($connect, "SELECT * FROM `etudiants`");

$recup = mysqli_fetch_all($etudiants, MYSQLI_ASSOC);

$nb_etudiants = mysqli_query ($connect, "SELECT COUNT(*) FROM `etudiants`");

$recup2 = mysqli_fetch_all($nb_etudiants, MYSQLI_ASSOC);

//echo "<pre>";var_dump ($recup, $recup2) ;echo "</pre>";

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
            
            <th>prenom</th>
            <th>nom</th>
            <th>naissance</th>
            <th>sexe</th>
            <th>email</th>
            <th>nb_etudiants</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($etudiants as $value){
            echo "<tr><td>". $value ['prenom'] ."</td>";
            echo "<td>". $value ['nom'] ."</td>";
            echo "<td>". $value ['naissance'] ."</td>";
            echo "<td>". $value ['sexe'] ."</td>";
            echo "<td>". $value ['email'] ."</td>";
        }
        foreach ($nb_etudiants as $value2){
            echo "<td>". $value2 ['COUNT(*)']."</td></tr>";
        }
        ?>
    </tbody>
</table>
</body>

</html>