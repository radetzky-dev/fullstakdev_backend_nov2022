<?php
echo "Ciao, ".$_SESSION["userInfo"]."<br>";
echo "Sei loggato con userId ".$_SESSION["userId"];

setcookie("MusaCookie", $_SESSION["userInfo"]);
?>
<a href="logout.php">Esegui logout</a>