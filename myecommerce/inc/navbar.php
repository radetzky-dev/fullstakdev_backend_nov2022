
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">MarketPlaceMusa</a>
   
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
 
                <li class="nav-item">
                    <a class="nav-link" href="insert_product.php">Insert (ADMIN)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="manage_products.php">Prodotti (ADMIN)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Customers (ADMIN)</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">Carrello (CUSTOMER)</a>
                </li>
                <li>
                <div class="nav-link" ><?php echo "Ciao, " . $_SESSION["userInfo"];?></div>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="logout.php">Logout</a>       
                </li>
            </ul>
        </div>
    </div>
</nav>

