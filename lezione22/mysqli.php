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

echo "<h3>Ordini come associativo</h3>";
$query = "select * from orders";

$result = $conn->query($query);

printf("Select returned %d rows.<br>", $result->num_rows);

while ($row = $result->fetch_assoc()) {
    printf("Order num: %s Payed? %s <br>", $row["order_num"], $row["payed"]);
}

echo "<h3>Ancora prodotti come array</h3>";
$query = "select * from product limit 5";

$result = mysqli_query($conn, $query);
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

foreach ($rows as $row) {
    printf("Name: %s price %s  description %s<br>", $row["name"], $row["price"], $row["description"]);
}

echo "<h3>Ancora prodotti come oggetti</h3>";
$query = "select * from product limit 5";
$result = $conn->query($query);

while ($obj = $result->fetch_object()) {
    printf("%s desc: %s)<br>", $obj->name, $obj->description);
}

echo "<h3>Prodotti</h3>";

$query = "select * from product limit 10";

$result = $conn->query($query);

printf("Select returned %d rows.<br>", $result->num_rows);

while ($row = $result->fetch_assoc()) {
    printf("Name: %s price %s  description %s<br>", $row["name"], $row["price"], $row["description"]);
}


echo "<h3>Ancora prodotti (una riga sola)</h3>";
$query = "select * from product order by name DESC";
$result = $conn->query($query);
$rows = $result->fetch_array(MYSQLI_NUM);

var_dump($rows);



$conn->close();
