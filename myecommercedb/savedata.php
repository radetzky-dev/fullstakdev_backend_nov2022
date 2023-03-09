<?php
session_start();
include "inc/functions.php";
include "inc/check_is_admin.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
     var_dump($_REQUEST);
     //var_dump($_FILES);

  
    $db = pdoConnect();
    if ($db) {
        if ($_POST['product_id'] !="") {
            //update
            $query = "UPDATE product SET name=?, price=?,quantity=?, description=?, photo=?,category_id=? WHERE id=?";

            $result = getQueryResults($query, $db, [$_POST['product'], $_POST['product_prize'], $_POST['product_q'], $_POST['description'], $_POST['image'], $_POST['category'], $_POST['product_id']]) ? "<br>Ok" : "<br>Errore";
        } else {

            //Insert
    
            include "inc/upload.php";
            try {
                $date = date('Y-m-d H:i:s');
                $query = 'INSERT INTO product (name,price,quantity,description,photo,category_id,creation_date) VALUES (?,?,?,?,?,?,?);';

                $result = getQueryResults($query, $db, [$_POST['product'], $_POST['product_prize'], $_POST['product_q'], $_POST['description'], $_FILES['image']['name'], $_POST['category'], $date]);

   

            } catch (Exception $e) {
                echo "Errore nella visualizzazione dei dati " . $e->getMessage();
            }
        }
        $db = null;
    }
}

header("Location: manage_products.php");
