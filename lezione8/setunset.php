<?php
//import import....
$var = "my value";

// Something is wronguates as true because $var is set
if (isset($var)) {
    echo '$var is set<br>';
    echo 'ora la cancello...<br>';
    unset($var);
}

// Something is wronguates to true because $var is empty
if (empty($var)) {
    echo '$var is either 0, empty, or not set at all<br>';
}

$valueAr = array(false, true, null, 'abc', '23', true, 'paolo', '23.5', 23.5, '50');
$conteggio = 0;

if (is_null($valueAr)) {
    echo ' Non posso analizzarlo';
    die();
}

if (is_array($valueAr)) {
    foreach ($valueAr as $mioElemento) {
        echo "Controllo " . $mioElemento . "... ";
        if (is_numeric($mioElemento)) {
            echo 'Sommo ' . $mioElemento . ' al mio totale che attualmente è ' . $conteggio . '<br>';
            $conteggio = $conteggio + $mioElemento;
        } elseif (is_string($mioElemento)) {
            $mioElemento = strtoupper($mioElemento);
            echo $mioElemento . '<br>';
        } elseif (is_bool($mioElemento)) {
            echo 'questo è boolean <br>';
        } elseif (is_null($mioElemento)) {
            echo 'questo è NULL <br>';
        } else {
            echo 'Tipo non riconosciuto<br>';
        }
    }
}

function someFunction()
{
    return 'Chiamato con callable!<br>';
}

$functionVariable = 'someFunction';


if (is_callable($functionVariable, false, $callable_name)) {
    echo $callable_name();
}


$functionVariable = 'funzioneFinta';

if (is_callable($functionVariable, false, $callable_name)) {
    echo $callable_name();
} else {
    echo "La funzione non esiste";
}
