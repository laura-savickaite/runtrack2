<?php

setcookie('prenom', $_POST['prenom'], time()+365*24*3600);

if (isset($_POST["deco"])){
     //setcookie('prenom');
     echo '<style>
        #formulaire {
            visibility:visible;
        }
        </style>';
}

if (isset($_POST["connexion"]))
 {
    if ($_COOKIE['prenom']==$_POST['prenom'])
     {
    echo "Bonjour " . $_COOKIE['prenom'] . " ! <br><input type='submit' value='deconnexion' name='deco'>
    <style>
        #formulaire {
            visibility:hidden;
        }
    </style>";
    
    }
} 

?>

<form action="index.php" method="post">
    <div id="formulaire">
        <label for="texte">prénom :</label>
            <input type="text" id="prenom" name="prenom">
            <input type="submit" value="connexion" name="connexion">
    </div>
    
</form>