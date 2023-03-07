<?php
include "inc/functions.php";
include "inc/header.php";
include "inc/navbar.php";
include "inc/check_is_admin.php";

$action = "Inserisci prodotto";
//se chiamata con un id lo pesca dal file e popola i campi qui sotto

$db = pdoConnect();

if (!empty($_GET["id"])) {

    if ($db) {
        try {
            $query = 'SELECT * from product where id=' . $_GET["id"];
            $dbStatement = getQueryResults($query, $db);
            $result = $dbStatement->fetchAll();

            // var_dump($result[0]['name']);
            $product = $result[0]['name']; //Todo resto del mapping

            //TODO mappare i campi

        } catch (Exception $e) {
            echo "Errore nella visualizzazione dei dati " . $e->getMessage();
        }

    }

}

?>

<container>
    <div class="container">
        <h3><?php echo $action; ?></h3>

        <form action="savedata.php" method="post" enctype="multipart/form-data">

        <input name="product_id" id="product_id" type="hidden" value="<?php if (!empty($_GET["id"])) {echo $_GET["id"];}?>" class="form-control">
            <div class="mb-3">
                <label for="product" class="form-label">Nome prodotto</label>
                <input name="product" id="product" type="text" value="<?php if (!empty($product)) {
    echo $product;
}
?>" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="product_q" class="form-label">Quantità</label>
                <input name="product_q" id="product_q" type="number" value="<?php if (!empty($currentProduct)) {
    echo $currentProduct['product_q'];
}
?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="product_prize" class="form-label">Prezzo</label>
                <input name="product_prize" id="product_prize" type="number" step="0.1" value="<?php if (!empty($currentProduct)) {
    echo $currentProduct['product_prize'];
}
?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input name="description" id="description" type="text" value="<?php if (!empty($currentProduct)) {
    echo $currentProduct['description'];
}
?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Categoria</label>
                <?php
if ($db) {
    try {
        $query = 'SELECT * from category';
        $dbStatement = getQueryResults($query, $db);
        $result = $dbStatement->fetchAll();
        //  var_dump($result);
        echo "QUESTO VA NELLA SELECT<br>";
        if (is_array($result) || is_object($result)) {
            foreach ($result as $value => $key) {
                echo $key['id'] . ' ' . $key['name'] . '<br>';
            }
        }

    } catch (Exception $e) {
        echo "Errore nella visualizzazione dei dati " . $e->getMessage();
    }
}
?>
                <input name="category" id="category" type="text" value="<?php if (!empty($currentProduct)) {
    echo $currentProduct['category'];
}
?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Aggiungi immagine</label>
                <input name="image" id="image" type="file" value="<?php if (!empty($currentProduct)) {
    echo $currentProduct['image'];
}
?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <div>
                    <input type="submit" name="login" value="Invia" class="btn btn-primary"></span>
                </div>
            </div>
        </form>
    </div>
</container>


<?php
$db = null;

include "inc/footer.php";?>