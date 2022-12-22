<?php

/*
1)
Creare una funzione che controlla se la stringa che gli si passa è palindroma

madam
osso
ossesso
esose
*/

$array = ['madam', 'osso', 'ossesso', 'esose', 'pippo'];

foreach ($array as $arr) {
    $arr2 = strrev($arr);
    if ($arr2 === $arr) {
        echo $arr . " è palindroma <br>";
    } else {
        echo $arr . " non è palindroma <br>";
    }
}

echo '<br>';

function palindromo($string)
{
    $lowercaseString = strtolower($string);
    $formattedString = str_replace(' ', '', $lowercaseString);
    $reversedString = strrev($formattedString);

    if ($reversedString === $formattedString) {
        return $string . '  è palindroma<br>';
    } else return $string . ' non è palindroma<br>';
}

foreach ($array as $arr) {
    echo palindromo($arr);
}

/*
2)
Trovare il maggiore fra 3 numeri
*/

function magg($x, $y, $z)
{
    $max = $x;

    if ($x >= $y && $x >= $z) {
        $max = $x;
    }
    if ($y >= $x && $y >= $z) {
        $max = $y;
    }
    if ($z >= $x && $z >= $y) {
        $max = $z;
    }

    echo "Maggiore numero among $x, $y and $z is: $max <br>";
}

magg(100, 50, 25);
magg(50, 50, 25);

$fruits = array(5, 20, 7, 2);
sort($fruits);


foreach ($fruits as $val) {
    echo $val."<br>";
}
