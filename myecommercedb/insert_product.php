<?php
include_once "inc/functions.php";
include_once "inc/header.php";
include_once "inc/navbar.php";
include_once "inc/check_is_admin.php";

$action = "Inserisci prodotto";
//se chiamata con un id lo pesca dal file e popola i campi qui sotto

$db = pdoConnect();

$quantity = 1;
$category_id =1;

if (!empty($_GET["id"])) {

    if ($db) {
        try {
            $query = 'SELECT * from product where id=' . $_GET["id"];
            $dbStatement = getQueryResults($query, $db);

            $result = $dbStatement->fetchAll();

            $product = $result[0]['name'];
            $quantity = $result[0]['quantity'];

            //  var_dump ($result[0]);
            $price = $result[0]['price'];

            $description = $result[0]['description'];
            $photo = $result[0]['photo'];
            $category_id = $result[0]['category_id'];

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
<input name="product_id" id="product_id" type="hidden" value="<?php if (!empty($_GET["id"])) {
    echo $_GET["id"];
}?>" class="form-control">
<div class="mb-3">
<label for="product" class="form-label">Nome prodotto</label>
<input name="product" id="product" type="text" value="
<?php if (!empty($product)) {
    echo $product;
}?>" class="form-control" required>
</div>
<div class="mb-3">
<label for="product_q" class="form-label">Quantità</label>

<?php 
$productType="number";
if (!empty($quantity)) {
    $productType="text";
}
?>

<input name="product_q" id="product_q" type="<?php echo $productType?>" value="
<?php 
    echo $quantity;
?>" class="form-control" required>
</div>
<div class="mb-3">
<label for="product_prize" class="form-label">Prezzo</label>
<input name="product_prize" id="product_prize" type="text" step="0.1" value="
<?php if (!empty($price)) {
    echo $price;
}?>" class="form-control" required>
</div>
<div class="mb-3">
<label for="description" class="form-label">Descrizione</label>
<input name="description" id="description" type="text" value="
<?php if (!empty($description)) {
    echo $description;
}?>" class="form-control" required>
</div>
<div class="mb-3">
<label for="category" class="form-label">Categoria</label>
<?php
if ($db) {
    try {
        $query = 'SELECT * from category';
        $dbStatement = getQueryResults($query, $db);
        $result = $dbStatement->fetchAll();

        if (is_array($result) || is_object($result)) {?>
<select type='select' name='category' class="form-select form-control" required aria-label="Default select example">
<option selected>Seleziona categoria</option>
<?php
            foreach ($result as $value => $key) {
                $selected = "";
                if ($key['id'] == $category_id) {
                    $selected = "selected";
                }
                echo '<option value="' . $key['id'] . '" ' . $selected . '>' . $key['name'] . '</option>';
            }
            ?> <select>
<?php }
    } catch (Exception $e) {
        echo "Errore nella visualizzazione dei dati " . $e->getMessage();
    }
}
?>

</div>
<div class="mb-3">
<label for="image" class="form-label">Aggiungi immagine</label>

<?php
if (!empty($photo)) {
    ?>
<input name="image" id="image" type="text" value="<?php echo $photo; ?>">
        <?php
}else{
    ?>
    <input name="image" id="image" type="file" value="" class="form-control" required>
        <?php
}
?>

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
include_once "inc/footer.php";