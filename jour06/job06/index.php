<?php

if ($_GET["style"]=="style 1"){
    
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>style</title>
</head>
<body>
<form action="index.php" method="get">
    <div>
        <label for="nom">Nom :</label>
        <input type="text" id="nom" name="nom">
    </div>
    <div>
        <label for="prenom">Prénom :</label>
        <input type="text" id="prenom" name="prenom">
    </div>
    <select name="style" id="style-select">
        <option value="">--Please choose an option--</option>
        <option value="style1">style 1</option>
        <option value="style2">style 2</option>
        <option value="style3">style 3</option>
    </select>
    <button type="submit">Submit</button>
</form>
</body>


