<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">MarketPlaceMusa</a>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">

                <?php
                $logout = false;
                if (!empty($_SESSION["isAdmin"])) {
                    $logout = true; ?>
                    <li class="nav-item">
                        <a class="nav-link" href="insert_product.php">Inserisci prodotto</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="manage_products.php">Gestione prodotti</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="manage_customers.php">Gestione clienti</a>
                    </li>

                <?php } elseif (!empty($_SESSION["userId"])) {
                    $logout = true;
                ?>
                    <li>
                        <div class="nav-link"><?php echo "Ciao, " . $_SESSION["userInfo"]; ?></div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Carrello</a>
                    </li>

                <?php } else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                <?php }

                if ($logout) { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php">Logout</a>
                    </li>
                <?php } ?>

            </ul>
        </div>
    </div>
</nav>