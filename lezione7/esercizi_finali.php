<?php

/* Check if there's a reminder  */
function hasAReminder(int $n): int
{
    for ($x = 2; $x < $n; $x++) {
        if ($n % $x == 0) {
            return 0;
        }
    }
    return 1;
}

function isPrimeNumber(int $val, int $myNumber, bool $printNonPrime = true, bool $printPrime = true): void
{
    if ($val == 0) {
        if ($printNonPrime) {
            echo $myNumber . ' is NOT a Prime Number.....' . "<br>";
        }
    } else {
        if ($printPrime) {
            echo $myNumber . ' is a Prime Number..' . "<br>";
        }
    }
}

function checkPrimeInInterval(int $firstNumber, int $secondNumber): void
{
    for ($x = $firstNumber; $x <= $secondNumber; $x++) {
        isPrimeNumber(hasAReminder($x), $x, true, true);
    }
}

checkPrimeInInterval(2, 18);
