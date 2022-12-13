<?php

/** Discover legal age */

/**  Declare vars */
$eta = 22;
$legalAge = 21;

if ($eta > $legalAge)
    echo "a eta bigger than legalAge<br>";

if ($eta > $legalAge) {
    echo "Vai!<br>";
} elseif ($eta == $legalAge) {
    echo "Che fortuna hai età giusta<br>";
} else {
    echo "Sorry! <br>";
}

/** Check legal age method long  */
//TODO transform in function
if ($eta >= $legalAge) {
    $maggiorenne = true;
} else {
    $maggiorenne = false;
}

if ($maggiorenne) {
    echo "Puoi entrare";
} else {
    echo "Non puoi entrare";
}

echo "<hr>";

/** Check legal age short */
echo "Tu " . ($eta >= $legalAge) ? "puoi entrare" : "non puoi entrare";
