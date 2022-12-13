<?php

/**
 * 1) Può votare? Data l'età di una persona vedere se può votare if
 * 2) Dato un $myNumber 5, -1, 0 , dire se è positivo, se è negativo o se è zero
 */

//primo esercizio

$age = 17;

if ($age >= 18 && $age >= 25) {
    echo " Puoi votare al senato!";
} elseif ($age >= 18 && $age < 25) {
    echo "Puoi votare solo alla camera ";
} else {
    echo "Non puoi votare.";
}

//Secondo esercizio

/** Check number type */
function numberType($myNumber)
{
    if ($myNumber > 0) {
        echo "Il numero è positivo!";
    } elseif ($myNumber < 0) {
        echo "Il numero è negativo!";
    } else {
        echo "Il numero è zero!";
    }
}

/** Check if is a real number or not */
function isRealNumber($myNumber)
{
    if (is_int($myNumber)) {
        $risultato = ($myNumber > 0) ? "positivo" : "è 0 oppure negativo";
        echo 'Il numero è ' . $risultato;
        numberType($myNumber);
    } else {
        echo "Non è un numero";
    }
}

/** Main program */
$myNumber = -1;
$myNumber = 1 + $myNumber;

if (!is_null($myNumber)) {
    echo "Il numero vale " . $myNumber . '<br>';
    isRealNumber($myNumber);
}
