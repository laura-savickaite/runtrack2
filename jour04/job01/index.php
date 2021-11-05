<?php
$index=0;


foreach ($_GET as $value) {
    echo $value ."<br/>";
    $index++;
}

echo "<br/>". $index;

//var_dump ($_GET); //voir si mon submit marche - array

?>


<form action="index.php" method="get">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">
    </div>
    <button type="submit">Submit</button>
</form>

