<?php
if (empty($_SESSION["isAdmin"])) {
    echo "Not allowed. <a href='index.php'>Torna alla home</a>";
    die();
}