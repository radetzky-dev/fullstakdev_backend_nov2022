<?php
include "inc/header.php";
?>
<!--- nav bar  pippo.php-->
<?php
echo "Ciao, " . $_SESSION["userInfo"] . "<br>";
echo "Sei loggato con userId " . $_SESSION["userId"];

setcookie("MusaCookie", $_SESSION["userInfo"]);
?>
<a href="logout.php">Esegui logout</a>

<?php include "inc/footer.php"; ?>