<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">MarketPlaceMusa</a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <?php if (!empty($_SESSION["isAdmin"])) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="insert_product.php">Inserisci prodotto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="manage_products.php">Gestione prodotti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Gestione clienti</a>
                    </li>
                <?php } else { ?>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Carrello</a>
                    </li>
                <?php } ?>
                <li>
                    <div class="nav-link"><?php echo "Ciao, " . $_SESSION["userInfo"]; ?></div>
                    </li>
                <li class="nav-item">
                    <a class="nav-link" href="logout.php">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>