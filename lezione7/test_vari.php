<?php
//Write a function to reverse a string

function reverseStringGeni(string $strToReverse): string
{
    for ($i = strlen($strToReverse) - 1, $j = 0; $j < $i; $i--, $j++) {
        $temp = $strToReverse[$i];
        $strToReverse[$i] = $strToReverse[$j];
        $strToReverse[$j] = $temp;
    }
    return $strToReverse;
}

function nomeReverseBruno(string $nome): string
{
    return strrev($nome);
}

function reverse_string(string $strToRev) : string
{
    $n = strlen($strToRev);
    if ($n == 1) {
        return $strToRev;
    } else {
        $n--;
        return reverse_string(substr($strToRev, 1, $n)) . substr($strToRev, 0, 1);
    }
}

$myName = "Geni";
print_r(reverseStringGeni($myName));


echo '<hr>';
$name = "bruno";
echo nomeReverseBruno($name);


echo '<hr>';
$myName = "Paolo";
echo reverse_string($myName);
