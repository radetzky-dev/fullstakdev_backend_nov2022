<?php
include "inc/header.php";
include "inc/navbar.php";
?>

<container>
    <div class="container">
        <h3>Insert product</h3>

        <form action="savedata.php" method="post" id="frmLogin">
                <div class="mb-3">
                    <label for="productlbl" class="form-label">Nome prodotto</label>
                    <input name="product" id="product" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="productlbl" class="form-label">Codice prodotto</label>
                    <input name="product_code" id="product_code" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="productlbl" class="form-label">Quantità</label>
                    <input name="product_q" id="product_q" type="number" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="productlbl" class="form-label">Prezzo</label>
                    <input name="product_prize" id="product_prize" type="number" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="descriptionlbl" class="form-label">Descrizione</label>
                    <input name="description" id="description" type="text" class="form-control" required>
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