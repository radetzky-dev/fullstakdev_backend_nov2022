<?php
session_start();
require_once "inc/functions.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    echo "<pre>";
    echo ($_SERVER['REQUEST_METHOD']);
    echo "</pre>";

    //leggo il file
    $productsList = readFileJson("data/products.json");

    //Se non è presente alcun prodotto creo un array vuoto
    if ($productsList == null) {
        $productsList = array();
    }

    //Setto condizione di update
    $itemUpdate = false;

    foreach ($productsList as $key => $product) {
        if ($product['product_code'] == $_POST["product_code"]) {
            unset($productsList[$key]);
        }
    }

    $productsList[] = $_REQUEST;    

    //Aggiorno il file json con i nuovi dati inseriti
    $result = updateFileJson($productsList, "data/products.json");
}

header("Location: index.php");
