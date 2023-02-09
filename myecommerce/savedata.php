<?php
session_start();
require_once "inc/functions.php";
include "inc/check_is_admin.php";

//leggo il file
$productsList = readFileJson("data/products.json");
//Se non è presente alcun prodotto creo un array vuoto
if ($productsList == null) {
    $productsList = array();
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && $_REQUEST['op'] == "delete") {

    foreach ($productsList as $key => $product) {
        if ($product['product_code'] == $_REQUEST["id"]) {
            unset($productsList[$key]);
        }
    }
        //Aggiorno il file json con i nuovi dati inseriti
        $result = updateFileJson($productsList, "data/products.json");
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
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

header("Location: manage_products.php");
