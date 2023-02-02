<?php
include "inc/functions.php";
include "inc/header.php";
?>
<main>

    <div class="container">

        <?= showProducts(readFileJson("data/products.json")); ?>

    </div>


</main>
</body>
<?php include "inc/footer.php";  ?> 




