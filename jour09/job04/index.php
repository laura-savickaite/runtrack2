<?php

$connect = mysqli_connect('localhost', 'root', '', 'jour08');

mysqli_set_charset($connect,"utf8");

$etudiants = mysqli_query ($connect, "SELECT * FROM `etudiants` WHERE prenom LIKE 'T%';");

$recup = mysqli_fetch_all($etudiants, MYSQLI_ASSOC);

//echo "<pre>";var_dump ($recup);echo "</pre>";

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
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($etudiants as $value){
            echo "<tr><td>". $value ['prenom'] ."</td>";
            echo "<td>". $value ['nom'] ."</td>";
            echo "<td>". $value ['naissance'] ."</td>";
            echo "<td>". $value ['sexe'] ."</td>";
            echo "<td>". $value ['email'] ."</td></tr>";
        }
        ?>
    </tbody>
</table>
</body>

</html>