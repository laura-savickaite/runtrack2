<?php
// $index=0;

    if ($_GET["nombre"]%2==0){
        echo $_GET["nombre"]. "est pair <br/>";
    }else{
        echo $_GET["nombre"]. "est impair <br/>";
    }
?>

<form action="index.php" method="get">
    <div>
        <label for="nombre">nombre :</label>
        <input type="text" id="number" name="nombre">
    </div>
    <button type="submit">Submit</button>
</form>