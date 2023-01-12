<?php
//TODO scrivere un messaggio se uno dei due valori non è valorizzato
// creare un altro form che usa il metodo post e visualizzare i dati inviati

if (isset($_GET["name"]) || isset ($_GET["age"]))
{
    echo "Sono settati";
    if ($_POST["name"] || $_POST["age"]) {
        echo 'Chiamata POST<br>';
        echo "Welcome " . $_POST['name'] . "<br />";
        echo "You are " . $_POST['age'] . " years old.";
    } elseif ($_GET["name"] || $_GET["age"]) {
        echo 'Chiamata GET<br>';
        echo "Welcome " . $_GET['name'] . "<br />";
        echo "You are " . $_GET['age'] . " years old.";
    } elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
        echo "Pagina appena caricata";
    } else {
        echo "Chiamata non riconosciuta";
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