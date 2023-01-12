<?php


/**
 * sumNumbers
 *
 * @param  mixed $x
 * @param  mixed $y
 * @return void
 */
function sumNumbers(int $x, int $y): void
{
    $z = $x + $y;
    echo "Sum of $x and $y is: $z <br>";
}


//array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false


/**
 * sumNumberSimple
 *
 * @param  mixed $x
 * @param  mixed $y
 * @return int
 */
function sumNumberSimple(int $x, int $y): int
{
    return $x + $y;
}


/**
 * somma
 *
 * @param  mixed $x
 * @param  mixed $y
 * @return void
 */
function somma($x, $y)
{
    return $x + $y;
}

$firstNumber = 15;
$secondNumber = 10;
sumNumbers($firstNumber, $secondNumber);

echo sumNumberSimple($firstNumber, $secondNumber) . '<br>';

echo somma($firstNumber, $secondNumber) . '<br>';
