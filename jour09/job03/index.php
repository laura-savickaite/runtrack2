<?php

$connect = mysqli_connect('localhost', 'root', '', 'jour08');

mysqli_set_charset($connect,"utf8");

$femme = mysqli_query ($connect, 'SELECT `prenom`, `nom`, `naissance` FROM `etudiants` WHERE sexe="Femme"');

$recup = mysqli_fetch_all($femme, MYSQLI_ASSOC);

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
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($femme as $value){
            echo "<tr><td>". $value ['prenom'] ."</td>";
            echo "<td>". $value ['nom'] ."</td>";
            echo "<td>". $value ['naissance'] ."</td></tr>";
        }
        ?>
    </tbody>
</table>
</body>

</html>



