<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>un po' di matematica</h1>
    <?php
    $x = "hello world";
    // $x = null;

    echo $x;
    echo '<br>';




    //dichiarazione variabili
    $a = 5;
    $b = 8;
    //stampo a video i vriabili dichiarati
    echo 'sono a = ' . $a;
    echo '<br>';
    echo 'sono b = ' . $b;
    echo '<br>';
    //la somma
    echo  'a + b = ' . ($b + $a);
    echo '<br>';
    //detrazione
    echo  'a - b = ' . $a - $b;
    echo '<br>';
    //multiplicazione
    echo  'a * b = ' . $b * $a;
    echo '<br>';
    //divisione
    echo  'a / b = ' . $a / $b;
    echo '<br>';

    ?>


    <hr>


    <?php
    //
    $a++;
    $b++;
    echo 'sono la $a++ =' . $a . '<br>' . 'sono la $b++ =' . $b;
    echo '<br>';
    $a--;
    $b--;
    echo 'sono la $a--=' . $a . '<br>' . 'sono la $b-- = ' . $b;
    echo '<br>';
    ?>


    <hr>

    <?php

    $a = 8;
    $b = 8;
    //stampo a video i vriabili dichiarati
    echo 'sono a = ' . $a;
    echo '<br>';
    echo 'sono b = ' . $b;
    echo '<br>';
    $c = $a <=> $b;

    if ($c > 0) {
        echo 'a >maggiore di b <br>';
    }
    if ($c == 0) {
        echo 'a uguale a b <br>';
    }
    if ($c < 0) {
        echo 'a minore di b <br>';
    }


    echo 'quest operatore <=> =' . $c;
    echo '<br>';
    ?>

    <hr>

    <?php
    //dichiarazione variabili
    $a = 5;
    $b = 8;
    //stampo a video i vriabili dichiarati
    echo 'sono a ' . $a;
    echo '<br>';
    echo 'sono b ' . $b;
    echo '<br>';

    if ($a > $b) {
        echo "a is bigger than b<br>";
    } else {
        echo "a is smoler than b<br>";
    }
    ?>

    <hr>
    <h3>confronto assoluto</h3>
    <?php
    //confrontiamo il valore assoluto dei 2 variabili
    //dichiarazione dei variabili
    $a = 8;
    $b = 8.00;
    //ciclo per il confronto
    if ($a === $b) {
        echo "a is equal b <br>";
    } else {
        echo "a is not equal to b<br>";
    }
    ?>

</body>

</html>