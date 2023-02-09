<?php
include "inc/functions.php";
include "inc/header.php";
include "inc/navbar.php";

include "inc/check_is_admin.php";

$action = "Inserisci prodotto";
//se chiamata con un id lo pesca dal file e popola i campi qui sotto
if (!empty($_GET["id"])) {
    //leggere file, pescare dato con id indicato e poi mostralo nei campi
    $currentProduct = null;

    $productsList = readFileJson("data/products.json");
    foreach ($productsList as $product) {
        if ($product['product_code'] == $_GET["id"]) {
            $currentProduct = $product;
            $action = "Aggiorna prodotto";
        }
    }
}

?>

<container>
    <div class="container">
        <h3><?php echo $action; ?></h3>

        <form action="savedata.php" method="post" id="frmLogin">
            <div class="mb-3">
                <label for="product" class="form-label">Nome prodotto</label>
                <input name="product" id="product" type="text" value="<?php if (!empty($currentProduct)) echo $currentProduct['product'] ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="product_code" class="form-label">Codice prodotto</label>
                <input name="product_code" id="product_code" type="text" value="<?php if (!empty($currentProduct)) echo $currentProduct['product_code'] ?>" class="form-control" required <?php if (!empty($currentProduct)) {?> readonly <?php } ?>>
            </div>
            <div class="mb-3">
                <label for="product_q" class="form-label">Quantità</label>
                <input name="product_q" id="product_q" type="number" value="<?php if (!empty($currentProduct)) echo $currentProduct['product_q'] ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="product_prize" class="form-label">Prezzo</label>
                <input name="product_prize" id="product_prize" type="number" step="0.1" value="<?php if (!empty($currentProduct)) echo $currentProduct['product_prize'] ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input name="description" id="description" type="text" value="<?php if (!empty($currentProduct)) echo $currentProduct['description'] ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="category" class="form-label">Categoria</label>
                <input name="category" id="category" type="text" value="<?php if (!empty($currentProduct)) echo $currentProduct['category'] ?>" class="form-control" required>
            </div>
            <div class="mb-3">
                <div>
                    <input type="submit" name="login" value="Invia" class="btn btn-primary"></span>
                </div>
            </div>
        </form>
    </div>
</container>


<?php include "inc/footer.php"; ?>