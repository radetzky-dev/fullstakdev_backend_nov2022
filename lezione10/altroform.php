<?php
//TODO scrivere un messaggio se uno dei due valori non è valorizzato
// creare un altro form che usa il metodo post e visualizzare i dati inviati


/**
 * checkIsNumeric
 *
 * @param  mixed $value
 * @return bool
 */
function checkIsNumeric($value): bool
{
    if (is_numeric($value)) {
        return true;
    } else {
        echo "ATTENZIONE Il valore inserito non è numerico";
        return false;
    }
}

/**
 * warnError
 *
 * @param  mixed $method
 * @return void
 */
function warnError ($method): void
{
    echo "Non tutti i parametri ".$method." sono stati valorizzati";
}


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_GET["name"]) || isset($_GET["age"])) {
        echo 'Chiamata GET<br>';
        if ($_GET["name"] != "" && $_GET["age"] != "") {
            echo "Welcome " . $_GET['name'] . "<br />";
            if (checkIsNumeric($_GET['age'])) {
                echo "You are " . $_GET['age'] . " years old.";
            }
        } else {
            warnError("GET");
        }
    } else {
        echo "Pagina appena caricata";
    }
} else {
    if (isset($_POST["name"]) || isset($_POST["age"])) {
        echo 'Chiamata POST<br>';
        if ($_POST["name"] != "" && $_POST["age"] != "") {
            echo "Welcome " . $_POST['name'] . "<br />";
            if (checkIsNumeric($_POST['age'])) {
                echo "You are " . $_POST['age'] . " years old.";
            }
        } else {
            warnError("POST");
        }
    } else {
        echo "POST senza parametri";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form</title>
</head>

<body>
    <h2>GET</h2>
    <form action="<?php $_PHP_SELF ?>" method="GET">
        Name: <input type="text" name="name" />
        Age: <input type="text" name="age" />
        <input type="submit" />
    </form>
    <hr>
    <h2>POST</h2>
    <form action="<?php $_PHP_SELF ?>" method="POST">
        Name: <input type="text" name="name" />
        Age: <input type="text" name="age" />
        <input type="submit" />
    </form>
</body>

</html>