<?php

$connect = mysqli_connect('localhost', 'root', '', 'jour08');

mysqli_set_charset($connect,"utf8");

$etages = mysqli_query ($connect, "SELECT * FROM `etage`");

$recup = mysqli_fetch_all($etages, MYSQLI_ASSOC);

$superficie_totale = mysqli_query ($connect, "SELECT SUM(superficie) FROM etage;");

$recup2 = mysqli_fetch_all($superficie_totale, MYSQLI_ASSOC);

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
            
            <th>nom</th>
            <th>numero</th>
            <th>superficie</th>
            <th>superficie_totale</th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($etages as $value){
            echo "<tr><td>". $value ['nom'] ."</td>";
            echo "<td>". $value ['numero'] ."</td>";
            echo "<td>". $value ['superficie'] ."</td>";
        }
        foreach ($superficie_totale as $value2){
            echo "<td>". $value2 ['SUM(superficie)']."</td></tr>";
        }
        ?>
    </tbody>
</table>
</body>

</html>