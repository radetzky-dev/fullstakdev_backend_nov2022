<?php
//Set env vars
putenv("DB_HOSTNAME=localhost");
putenv("DB_NAME=marketplacemusa");
putenv("DB_USER=root");
putenv("DB_PASSWORD=");

print "My db is: " . getenv("DB_NAME") . "<br>";

function pdoConnect()
{
    try {
        return new PDO("mysql:host=" . getenv('DB_HOSTNAME') . ";dbname=" . getenv('DB_NAME') . "", getenv("DB_USER"), getenv("DB_PASSWORD"));
    } catch (PDOException $e) {
        echo "Errore di connessione al DB: " . $e->getMessage();
    }
}

$db = pdoConnect();
if ($db) {
    echo "Connesso con successo!<br>";
    $query = "SELECT * from product";

    foreach ($db->query($query) as $prodotto) {
        /*
        echo "<pre>";
        print_r($row);
        echo "</pre>";
        */
        echo $prodotto['name'] . ' ' . $prodotto['price'] . '<br>';
    }

    echo "<hr>";

    $query = "SELECT * from customer";

    foreach ($db->query($query) as $result) {
        echo $result['name'] . ' ' . $result['surname'] . '<br>';
    }

    $db = null;
    echo "Disconnesso!";
}