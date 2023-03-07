<?php
session_start();
require_once "inc/functions.php";
include "inc/check_is_admin.php";
include "inc/upload.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    var_dump($_REQUEST);

    $db = pdoConnect();

    if ($db) {
        try {
            $query = 'INSERT INTO products ("name","price","quantity","description","photo","category_id") VALUES (?,?,?,?,?,?);';

            echo $query;
            die();
            //TODO mappare i campi

        } catch (Exception $e) {
            echo "Errore nella visualizzazione dei dati " . $e->getMessage();
        }
        $db = null;
        die();
    }
}

header("Location: manage_products.php");
