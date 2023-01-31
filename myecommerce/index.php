<?php
include "inc/header.php";
include "inc/navbar.php";
include "inc/functions.php";
?>

<container>
    <div class="container">

        <h3>General store</h3>

        <?php
        $result = readFileJson("data/products.json");

        //TODO mostrare oggetti
        //TODO in insert : arricchire con altre info qta, id
        ?>
        <table class="table table-bordered">
            <thead thead class="thead-dark">
                <tr>
                    <th>Qta</th>
                    <th>Descrizione</th>
                    <th>Prezzo</th>
                    <th>Categoria</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($result as $key => $value) {
                    ?><tr><td> <?=$value['product'];?></td><td><?=$value['description'];?></td><td></td><td></td></tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</container>


<?php include "inc/footer.php"; ?>