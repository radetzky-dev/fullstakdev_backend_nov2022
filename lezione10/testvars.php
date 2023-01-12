<?php
echo '<pre>';
var_dump($_SERVER);
echo '</pre>';
echo $_SERVER['SERVER_NAME'] . ' ' . $_SERVER['ADDR'];
echo '<hr>';

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo 'richiesta GET->';
    // echo 'Pippo '.$_GET['pippo'];
} else {
    echo "Richiesta diversa da GET";
}
