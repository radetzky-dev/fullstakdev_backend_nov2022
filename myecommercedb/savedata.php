<?php
session_start();
include "inc/functions.php";
include "inc/check_is_admin.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (!empty($_POST['product_id']))
    {
        //update
        echo "Update";
        die();
    }
    else
    {
        //Insert
        echo "Insert";
        include "inc/upload.php";
    }

    var_dump($_REQUEST);

    $db = pdoConnect();

    if ($db) {
        try {
            $date = date('Y-m-d H:i:s');
            $query = 'INSERT INTO product (name,price,quantity,description,photo,category_id,creation_date) VALUES (?,?,?,?,?,?,?);';
            $result = getQueryResults($query, $db, [$_POST['product'], $_POST['product_prize'], $_POST['product_q'], $_POST['description'], $_FILES['image']['name'], $_POST['category'],$date]) ? "<br>Ok" : "<br>Errore";
            echo $result;
            echo '<pre>';

            var_dump($_POST);
            var_dump($_FILES);
            echo '</pre>';

//TODO mappare i campi

        } catch (Exception $e) {
            echo "Errore nella visualizzazione dei dati " . $e->getMessage();
        }
        $db = null;
        die();
    }
}

header("Location: manage_products.php");
