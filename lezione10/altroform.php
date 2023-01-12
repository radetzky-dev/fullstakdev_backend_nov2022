<?php
//TODO scrivere un messaggio se uno dei due valori non è valorizzato
// creare un altro form che usa il metodo post e visualizzare i dati inviati


if ($_GET["name"] || $_GET["age"]) {
    echo "Welcome " . $_GET['name'] . "<br />";
    echo "You are " . $_GET['age'] . " years old.";
    exit();
}
?>
<html>
<head><title>Form</title></head>
<body>
    <form action="<?php $_PHP_SELF ?>" method="GET">
        Name: <input type="text" name="name" />
        Age: <input type="text" name="age" />
        <input type="submit" />
    </form>
</body>

</html>