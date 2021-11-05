<?php


    if (($_POST["username"]=="John") && $_POST["password"]=="Rambo"){
        echo "C’est pas ma guerre";
        
    }else {
        echo "Votre pire cauchemar";
    }

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