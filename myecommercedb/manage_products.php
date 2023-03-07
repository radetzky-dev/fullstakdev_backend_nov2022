<?php
include "inc/functions.php";
include "inc/header.php";
include "inc/navbar.php";

include "inc/generateTables.php";
include "inc/check_is_admin.php";
?>

<container>

    <div class="container">
        <h3>Gestisci prodotti</h3>
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
                        <th>Operazioni</th>
                    </tr>
                </thead>
                <tbody>
                <?php //todo gestire che dopo 3 vada a capo
$db = pdoConnect();

if ($db) {
    try {
        $query = 'SELECT * from product limit 6';
        $dbStatement = getQueryResults($query, $db);
        $result = $dbStatement->fetchAll();
        echo showProducts($result);
    } catch (Exception $e) {
        echo "Errore nella visualizzazione dei dati " . $e->getMessage();
    }
    $db = null;
}
?>
                </tbody>
            </table>
        </div>
    </div>
</container>


<?php include "inc/footer.php";?>