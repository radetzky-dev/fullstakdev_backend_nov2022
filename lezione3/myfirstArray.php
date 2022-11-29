<!DOCTYPE html>
<html>

<head>
    <title>La mia auto</title>
</head>

<body>
    <h1>AUTOMOBILI</h1>
    <?php

    $auto = array("Ferrari", "Fiat", "Lancia", "Alfa Romero");
    $auto[4] = "Lamborghini";

    $auto[2] = "Aston Martin";

    var_dump($auto);

    //var_dump($auto[2]);

    echo "<p>Ho appena comprato una " . $auto[2] . "</p>";

    $eta = array ('Mario' => 38, "Piero" =>35, "Gino" => "81");

    var_dump($eta);

    echo '<br>'.$eta['Mario'];

    $famiglia = array (
        "Rossi" => array ("A","b","c"),
        "Verdi" => array ("A","b","c"),
    );

    var_dump($famiglia);

    ?>
</body>

</html>