<?php
//Set vars
putenv("DB_HOSTNAME=localhost");
putenv("DB_NAME=marketplacemusa");
putenv("DB_USER=root");
putenv("DB_PASSWORD=");


/**
 * pdoConnect
 *
 * @return PDO
 */
function pdoConnect(): PDO|null
{
    try {
        return new PDO("mysql:host=" . getenv('DB_HOSTNAME') . ";dbname=" . getenv('DB_NAME') . "", getenv("DB_USER"), getenv("DB_PASSWORD"));
    } catch (PDOException $e) {
        echo "Errore di connessione al DB: " . $e->getMessage();
        return null;
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
        return true;
    } catch (PDOException $e) {
        echo "Si è verificato un errore nella query $query " . $e->getMessage();
        return false;
    }
}



/**
 * createFakeCustomers
 *
 * @param  mixed $db
 * @param  mixed $ids
 * @return void
 */
function createFakeCustomers(PDO $db, $username, $password): void
{
    $names = ["gianni", "paola", "fulvio", "remo", "giulia", "Boh", "Rachel"];
    $surnames = ["Green", "Red", "Blue", "Pink", "Yellow", "White", "Clinton", "Simpson"];

    //FAKER
    $name = ucfirst($names[random_int(0, count($names) - 1)]);
    $surname = ucfirst($surnames[random_int(0, count($surnames) - 1)]);

    $email = strtolower("$username.$surname@$surname.com");
    $creationdate = date('Y-m-d H:i:s');

    $insertQuery = "INSERT INTO customer (name, surname, username,password,email, creation_date) VALUES (\"$name\", \"$surname\", \"$username\", \"$password\", \"$email\",\"$creationdate\")";

    // echo $insertQuery;
    if (getQueryResults($insertQuery, $db)) {
        echo "Customer inseriti correttamente";
    }
}

/**
 * createFakeProducts
 *
 * @param  mixed $db
 * @param  mixed $ids
 * @return void
 */
function createFakeProducts(PDO $db, array $ids): void
{
    $names = [
        "Oil",
        "Hazelnut",
        "Wine",
        "Yogurt - Cherry, 175 Gr",
        "Wine - Zinfandel California 2002",
        "Chocolate - Milk Coating",
        "Cheese - Swiss Sliced",
        "Peas - Pigeon, Dry",
        "Sproutsmustard Cress",
        "Cabbage - Green",
        "Shrimp - Baby, Cold Water",
        "Sauce - Thousand Island",
        "Cake - Miini Cheesecake Cherry",
        "Irish Cream - Baileys",
        "Artichoke - Hearts, Canned",
        "Wine - Cahors Ac 2000, Clos",
        "Kahlua",
        "Greens Mustard",
        "Carbonated Water - Blackberry",
        "Roe - Flying Fish",
        "Liquid Aminios Acid - Braggs"
    ];

    //FAKER
    $name = ucfirst($names[random_int(0, count($names) - 1)]);
    $description = "loren ipsum";
    $price = random_int(1, 999);
    $quantity = random_int(3, 12);
    $categoryid = $ids[random_int(0, count($ids) - 1)];
    $date = date('Y-m-d H:i:s');

    $insertQuery = "INSERT INTO product (name, description, price, quantity,category_id,creation_date) VALUES (\"$name\", \"$description\", \"$price\",  \"$quantity\", $categoryid, \"$date\")";

    if (getQueryResults($insertQuery, $db)) {
        echo "Prodotti inseriti correttamente";
    }
}

/**
 * getIdsFromTable
 *
 * @param  mixed $db
 * @param  mixed $tableName
 * @return array
 */
function getIdsFromTable(PDO $db, string $tableName): array
{
    $idsArray = [];
    $query = "SELECT id from $tableName";
    $dbStatement = $db->prepare($query, [PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
    $dbStatement->execute();
    $categories = $dbStatement->fetchAll();
    foreach ($categories as $index => $values) {
        foreach ($categories[$index] as $key => $value) {
            if (!is_numeric($key)) {
                $idsArray[] = $value;
            }
        }
    }
    return $idsArray;
}


/**
 * getUserPwd
 *
 * @param  mixed $db
 * @return void
 */
function getUserPwd(PDO $db): void
{
    $myval = '[{"first_name":"cbrinklow0","last_name":"YOvYlczSc"},
    {"first_name":"lquig1","last_name":"P1Duid"},
    {"first_name":"egreep2","last_name":"xPiINg"},
    {"first_name":"jboundey3","last_name":"Ki06L1ImPmD"},
    {"first_name":"mcobbin4","last_name":"TelBEKtQt"},
    {"first_name":"cohanley5","last_name":"iYu4pZC"},
    {"first_name":"sgroucutt6","last_name":"l8sfD6Sp"},
    {"first_name":"oliveing7","last_name":"fgsbYK"},
    {"first_name":"hsymers8","last_name":"AtE3KZB"},
    {"first_name":"iaykroyd9","last_name":"Mivi8Q9fFdc"},
    {"first_name":"relkinsa","last_name":"9g4HzbS"},
    {"first_name":"ltrinemanb","last_name":"t4yIwJjX"},
    {"first_name":"rwestmorelandc","last_name":"m2WkLUYii"},
    {"first_name":"stumultyd","last_name":"Xvby0XNg"},
    {"first_name":"mgiacoppoe","last_name":"rbLamKAD"},
    {"first_name":"edanielutf","last_name":"GamgnnnJw1GE"},
    {"first_name":"eowersg","last_name":"pLCjhrxb1DA2"},
    {"first_name":"ashawdforthh","last_name":"p8c8AoCn"},
    {"first_name":"bdohertyi","last_name":"juQpiMmFQS6"},
    {"first_name":"rarnattj","last_name":"oZxo9n6K"},
    {"first_name":"wscheuk","last_name":"DKvwYgHho"},
    {"first_name":"baveralll","last_name":"dMTuCp9"},
    {"first_name":"dbehnem","last_name":"pUubiShvbmv"},
    {"first_name":"itrown","last_name":"FYgS6IQ5gVy"},
    {"first_name":"csextyo","last_name":"77wEluLoL5rJ"},
    {"first_name":"lkirwanp","last_name":"fiVAQlJLy"},
    {"first_name":"bbetzq","last_name":"EG9I0Bv2SVao"},
    {"first_name":"rhawksbyr","last_name":"jgpxQlIodi"},
    {"first_name":"wgowlers","last_name":"oVqs1A9s"},
    {"first_name":"ijebbt","last_name":"LwTW67"}]';

    $myVars = json_decode($myval);

    foreach ($myVars as $key => $value) {
        echo $value->first_name . ' ' . $value->last_name . '<br>';
        createFakeCustomers($db, $value->first_name, $value->last_name);
        echo '<hr>';
    }
}

$db = pdoConnect();

if ($db) {

    //getUserPwd($db);  //Customer creati
    $idsArray = getIdsFromTable($db, "category");

    for ($i = 1; $i < 20; $i++) {
        echo "Creo $i prodotto<br>";
        createFakeProducts($db, $idsArray);
    }

    //Disconnect
    if ($db) {
        $db = null;
    }
}


echo "<hr><a href='#'>Torna alla home</a>";