<?php

/*
- *
- **
- ***
- ****
- *****
*/

$hyphen = "-";
$star = "*";
$i = 1;
while ($i <= 5) {
    //echo $hyphen . " " . str_repeat($star, $i) . "<br>";
    //ciclo for $i

    echo $hyphen . " ";
    for ($x = 1; $x <= $i; $x++) {
        echo "*";
    }
    echo '<br>';
    
    $i++;
}
