<?php
include "inc/header.php";
?>
<!--- nav bar  pippo.php-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Pricing</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<container>
    <div class="container">

        <?php
        echo "Ciao, " . $_SESSION["userInfo"] . "<br>";
        echo "Sei loggato con userId " . $_SESSION["userId"];

        setcookie("MusaCookie", $_SESSION["userInfo"]);
        ?>
        <a href="logout.php">Esegui logout</a>


        <h3>General store</h3>
        <table class="table table-bordered">
            <thead thead class="thead-dark">
                <tr>
                    <th>Qta</th>
                    <th>Descrizione</th>
                    <th>Prezzo</th>
                    <th>Categoria</th>
                    <th>Buy</th>
                </tr>
            </thead>
            <tbody></tbody>

            </tbody>
        </table>
    </div>
</container>
</body>
</div>

</div>
</container>
<footer class="footer mt-auto py-3 bg-light">
    <div class="container">
        <span class="text-muted">Place sticky footer content here.</span>
    </div>
</footer>

<?php include "inc/footer.php"; ?>