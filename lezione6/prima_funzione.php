<?php

/** sum numbers */
function sumNumbers(int $x, int $y): void
{
    $z = $x + $y;
    echo "Sum of $x and $y is: $z <br>";
}


//array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false

/** sum numbers */
function sumNumberSimple(int $x, int $y): int
{
    return $x + $y;
}

function somma($x, $y)
{
    return $x + $y;
}

$firstNumber = 15;
$secondNumber = 10;
sumNumbers($firstNumber, $secondNumber);

echo sumNumberSimple($firstNumber, $secondNumber) . '<br>';

echo somma($firstNumber, $secondNumber) . '<br>';
