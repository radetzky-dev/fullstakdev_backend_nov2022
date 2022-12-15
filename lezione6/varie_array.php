<?php
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
echo ' Il mio array ha ' . count($a) . ' elementi <br>';

$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Got Irix<br>";
}

$numbers = range(1, 20);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number <br>";
}

$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);
print_r($flipped);
