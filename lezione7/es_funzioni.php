<?php
function foo()
{
    $numargs = func_num_args();
    echo "Number of arguments: $numargs <br>";
    if ($numargs >= 2) {
        echo "Second argument is: " . func_get_arg(1) . "<br>";
    }
    $arg_list = func_get_args();
    for ($i = 0; $i < $numargs; $i++) {
        echo "Argument $i is: " . $arg_list[$i] . "<br>";
    }
}

function myFun(string $letter, int $numberOfCopy = 0, bool $sendMail = null): void
{
    echo 'hello ' . $letter;
    echo $numberOfCopy;
    echo $sendMail;
}

myFun('paolo');
myFun('paolo', 2);
myFun('paolo', 2, false);

foo(1, 2, 3, 4, 5, 6, 'xxx');

/*
Creare la vostra prima funzione che vi restituisca almeno 1 parametro e che effettui un'operazione (un calcolo, una ricerca in un array o simile)
*/

function fullName(string $name, string $surname): string
{
    $fullName = $name . ' ' . $surname;
    return $fullName;
}

$myName = 'Mario';
$mySurname = 'Rossi';


echo 'My name is ' . fullName($myName, $mySurname);

/**
 * Funzione che mi dia come risultato:
 * green, red, white
 */

echo "<hr>";
$color = array('white', 'green', 'red');

sort($color);
echo implode(",", $color);

$color = array('white', 'green', 'red');

sort($color);
foreach ($color as $c) {
    echo "$c, ";
}

echo "<ul>";
foreach ($color as $y) {
    echo "<li>$y</li>";
}
echo "</ul>";
