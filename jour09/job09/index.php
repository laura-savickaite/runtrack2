<?php

$connect = mysqli_connect('localhost', 'root', '', 'jour08');

mysqli_set_charset($connect,"utf8");

$salles = mysqli_query ($connect, "SELECT `nom`, `capacite` FROM `salles` ORDER BY capacite DESC;");

$recup = mysqli_fetch_all($salles, MYSQLI_ASSOC);

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
            <th>nom</th>
            <th>capacite</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($salles as $value){
            echo "<tr><td>". $value ['nom'] ."</td>";
            echo "<td>". $value ['capacite'] ."</td></tr>";
        }
        ?>
    </tbody>
</table>
</body>

</html>