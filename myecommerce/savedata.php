<?php
session_start();
require_once "inc/functions.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<pre>";
    print_r($_REQUEST);
    echo "</pre>";

    //leggo il file
    $newProduct = readFileJson("data/products.json");
    
    if ($newProduct == null) {
        $newProduct = array();
    }
    $newProduct[] = $_REQUEST;
    $result = updateFileJson($newProduct, "data/products.json");
    $newProduct = readFileJson("data/products.json");
}
header("Location: index.php");

