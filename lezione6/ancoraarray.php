<?php

$myCars = array ('bmw','mercedes','fiat');

$myOtherCars = ['jaguar','peugeot','ferrari'];

var_dump($myCars);
echo '<hr>';
$myOtherCars[0] = 'citroen';
var_dump($myOtherCars);

unset($myOtherCars[1]);

echo '<hr>';
$frutti = [
    'uno' => 'mela',
    'due' => 'banana',
];

unset($frutti['uno']);


$test = ['1','1','2','1'];

var_dump($frutti);
$frutti['tre'] = 'anguria';
$frutti[] = 'lampone';
$myCars[] = 'toyota';
echo '<hr>';
$frutti['tre'] = 'mandarino';
var_dump($frutti);
echo '<hr>';
var_dump($myCars);

echo '<hr>';



echo 'My car is a '.$myCars[1].'<br>';

echo 'My car is a '.$frutti['uno'].'<br>';


$name = 'Felipe';

if(isset($name)) {
    echo $name;
	}

echo  '-';
unset($name);

if(isset($name)) {
    echo $name;
	}
else
{
	echo 'la variabile non è più settata';
}