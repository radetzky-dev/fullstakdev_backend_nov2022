<?php
include "inc/functions.php";
include "inc/header.php";
include "inc/navbar.php";
include "inc/generateTables.php";
?>
<main>

  <div class="container">
    <div class="container px-4 py-5" id="custom-cards">
      <h2 class="pb-2 border-bottom">Marketplace</h2>
      <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
       <?php //todo gestire che dopo 3 vada a capo
         showProductsMain(readFileJson("data/products.json"));
       ?>
      </div>
    </div>
  </div>

</main>
</body>
<?php include "inc/footer.php"; ?>