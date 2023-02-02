<?php
include "inc/header.php";
include "inc/navbar.php";
?>

<container>
    <div class="container">
        <h3>Gestione prodotto (va anche in update)</h3>

        <form action="savedata.php" method="post" id="frmLogin">
                <div class="mb-3">
                    <label for="product" class="form-label">Nome prodotto</label>
                    <input name="product" id="product" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="product_code" class="form-label">Codice prodotto</label>
                    <input name="product_code" id="product_code" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="product_q" class="form-label">Quantità</label>
                    <input name="product_q" id="product_q" type="number" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="product_prize" class="form-label">Prezzo</label>
                    <input name="product_prize" id="product_prize" type="number" step="0.1" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrizione</label>
                    <input name="description" id="description" type="text" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label for="category" class="form-label">Categoria</label>
                    <input name="category" id="category" type="text" class="form-control" required>
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