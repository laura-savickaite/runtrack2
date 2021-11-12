<?php

$connect = mysqli_connect('localhost', 'root', '', 'jour08');

mysqli_set_charset($connect,"utf8");

$salles = mysqli_query ($connect, "SELECT salles.nom, etage.nom FROM `salles` INNER JOIN etage ON id_etages=etage.id;");

$recup = mysqli_fetch_all($salles);


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
            <th>nom des salles</th>
            <th>nom des étages</th>
        </tr>
    </thead>
    <tbody>
        <?php
        for ($i=0; isset($recup[$i])==true; $i++){
        echo "<tr>";
        foreach ($recup[$i] as $value){
            echo "<td>". $value ."</td>";
        }
        echo "</tr>";
    }
        ?>
    </tbody>
</table>
</body>

</html>