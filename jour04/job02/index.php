<?php

// var_dump ($_GET);


?>

<table>
<thead>
    <th>
        arguments
    </th>
    <th>
        valeurs
    </th>
</thead>
<tbody>
    <tr><td>Nom</td>
    <td><?php echo $_GET ["nom"]?></td></tr>

    <tr><td>Prenom</td>
        <td><?php echo $_GET ["prénom"] ?></td></tr>
        
</tbody>
</table>



<form action="index.php" method="get">
    <div>
        <label for="nom1">Nom :</label>
        <input type="text" id="nom" name="nom">
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prénom">
    </div>
    <button type="submit">Submit</button>
</form>