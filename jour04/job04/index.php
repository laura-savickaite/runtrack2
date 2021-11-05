<?php 
//var_dump ($_POST);
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
    $index=0;

    foreach ($_POST as $value){
        $index++;
    ?>
    <tr><td><?php echo $index;?></td>
    <td><?php echo $value;?></td></tr>

 <?php  }     ?>  
</tbody>
</table>

<form action="index.php" method="post">
    <div>
        <label for="nom">username :</label>
        <input type="text" id="name" name="username">
    </div>
    <div>
        <label for="prenom">password :</label>
        <input type="password" id="pass" name="password">
    </div>
    <button type="submit">Submit</button>
</form>