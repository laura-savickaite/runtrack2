<?php

$index=0;


foreach ($_POST as $value) {
    echo $value ."<br/>";
    $index++;
}

echo "<br/>". $index;

//var_dump ($_POST); //voir si mon submit marche - array

?>


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

