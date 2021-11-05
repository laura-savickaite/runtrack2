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
<?php 
    //si on veut vérifier --- que ça existe = une sécurité, une bonne habitude à prendre
    // if(isset($_GET["nom"]) && isset($_GET["prenom"]));

    foreach ($_GET as $value){
        $index++;
    ?>
    <tr><td><?php echo $index;?></td>
    <td><?php echo $value;?></td></tr>

 <?php  }     ?> 
                                               
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
    <button type="reset" value="Reset" name="reset">Reset</button>
</form>