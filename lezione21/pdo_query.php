<?php
putenv("DB_HOSTNAME=localhost");
putenv("DB_NAME=marketplacemusa");
putenv("DB_USER=root");
putenv("DB_PASSWORD=");

function pdoConnect()
{
    try {
        return new PDO("mysql:host=" . getenv('DB_HOSTNAME') . ";dbname=" . getenv('DB_NAME') . "", getenv("DB_USER"), getenv("DB_PASSWORD"));
    } catch (PDOException $e) {
        echo "Errore di connessione al DB: " . $e->getMessage();
    }
}

/**
 * showResults
 *
 * @param  mixed $dbStatement
 * @return bool
 */
function showResults($dbStatement): bool
{
    try {
        $result = $dbStatement->fetchAll();
        foreach ($result as $index => $values) {
            foreach ($result[$index] as $key => $value) {
                if (!is_numeric($key)) {
                    echo "$key: $value  <br>";
                }
            }
            echo '<hr>';
        }
        return true;
    } catch (Exception $e) {
        echo "Errore nella visualizzazione dei dati " . $e->getMessage();
        return false;
    }
}

/**
 * getQueryResults
 *
 * @param  mixed $query
 * @param  mixed $db
 * @param  mixed $execParams
 * @return bool
 */
function getQueryResults(string $query, PDO $db, array $execParams = null): bool
{
    try {
        $dbStatement = $db->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
        if (!is_null($execParams)) {
            $dbStatement->execute($execParams);
        } else {
            $dbStatement->execute();
        }
        //debug
       // $dbStatement->debugDumpParams();

        return showResults($dbStatement);
    } catch (PDOException $e) {
        echo "Si è verificato un errore nella query $query " . $e->getMessage();
        return false;
    }
}


$db = pdoConnect();

if ($db) {

    $query = 'SELECT * from customer';
    if (getQueryResults($query, $db)) {
        echo "Query andata buon fine!<br>";
    } else {
        echo "Errore nella query!<br>";
    }

    echo "<hr>";
    $query = "SELECT name, surname FROM customer WHERE surname = :find";
    $param = "rossi";
    
    $result = (getQueryResults($query, $db, ['find' => $param])) ? "<br>Ok" : "<br>Errore";
    echo $result;

    echo "<hr>";
    $query = "SELECT * FROM product WHERE name = :find";
    $param = "martello";

    $result = (getQueryResults($query, $db, ['find' => $param])) ? "<br>Ok" : "<br>Errore";
    echo $result;

}

echo "<br><br>qui IL MENU di navigazione!";