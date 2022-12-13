<?php
/** Discover legal age */

/**  Declare vars */
$eta = 19;
$legalAge = 21;

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
