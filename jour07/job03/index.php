<?php

session_start();

$_SESSION['prenom'] .= ' '.$_POST['prenom'];

echo $_SESSION['prenom'];

var_dump ($_SESSION['prenom']);

if (isset($_POST["reset"])){
    session_destroy();
}

?>

<form action="index.php" method="post">
    <div>
        <label for="texte">prénom :</label>
            <input type="text" id="prenom" name="prenom">
    </div>
    <input type="submit" value="submit" name="submit">
    <input type="submit" value="reset" name="reset">
</form>