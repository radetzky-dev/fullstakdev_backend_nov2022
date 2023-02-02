<?php
include "inc/header.php";
include "inc/navbar.php";
include "inc/functions.php";
include "inc/generateTables.php";
?>

<container>
    <script>
        function modifyProduct(id)
        {
            alert ("Modifico id "+id);
            //chiamare la pagina insert_product.php con un id
        }
        </script>
    <div class="container">
        <h3>Gestisci prodotti (SOLO ADMIN LO VEDE)</h3>
        <div>
            <table class="table table-bordered">
                <thead thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Descrizione</th>
                        <th>QTY</th>
                        <th>Prezzo</th>
                        <th>Categoria</th>
                    </tr>
                </thead>
                <tbody>
                    <?= showProducts(readFileJson("data/products.json")); ?>
                </tbody>
            </table>
        </div>
    </div>
</container>


<?php include "inc/footer.php"; ?>