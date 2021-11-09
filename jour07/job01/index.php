<?php
session_start();

$_SESSION['nbvisites']=$_SESSION['nbvisites']+1;

echo $_SESSION['nbvisites'];

if (isset($_POST["reset"])){
    session_destroy();
}else {
    $_SESSION['nbvisites'];
}

?>

<form action="index.php" method="post">
<input type="submit" value="Reset" name="reset">
</form>