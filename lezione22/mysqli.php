<?php

function connection()
{
    try {
        // echo "connessione avvenuta con successo!<br>";
        return new mysqli("localhost", "root", "", "marketplacemusa");
    } catch (Exception $e) {
        echo "Impossibile connettersi to connect to MySQL: " . $e->getMessage();
        exit();
    }
}

$conn = connection();

echo "<h3>Ordini</h3>";
$query = "select * from orders";

$result = $conn->query($query);

printf("Select returned %d rows.<br>", $result->num_rows);

while ($row = $result->fetch_assoc()) {
    printf("Order num: %s Payed? %s <br>", $row["order_num"], $row["payed"]);
}

echo "<h3>Prodotti</h3>";

$query = "select * from product limit 10";

$result = $conn->query($query);

printf("Select returned %d rows.<br>", $result->num_rows);

while ($row = $result->fetch_assoc()) {
    printf("Name: %s price %s  description %s<br>", $row["name"], $row["price"], $row["description"]);
}

$conn->close();
