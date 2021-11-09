<?php
session_start();

$_SESSION['nbdevisites']=$_SESSION['nbdevisites']+1;

echo $_SESSION['nbdevisites'];

if (isset($_POST["reset"])){
    session_destroy();
}else {
    $_SESSION['nbdevisites'];
}

?>

<form action="index.php" method="post">
<input type="submit" value="Reset" name="reset">
</form>