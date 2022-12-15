<?php

$myCars = array('bmw', 'mercedes', 'fiat');

$myOtherCars = ['jaguar', 'peugeot', 'ferrari'];

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


$test = ['1', '1', '2', '1'];

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


echo 'My car is a ' . $myCars[1] . '<br>';

echo 'My car is a ' . $frutti['uno'] . '<br>';


$name = 'Felipe';

if (isset($name)) {
    echo $name;
}

echo  '-';
unset($name);

if (isset($name)) {
    echo $name;
} else {
    echo 'la variabile non è più settata';
}


$MyArray = array('MON', 'TUE', 'WED');

$toDelete = array('xxx', 'FRI');

//using index number to assign values
//to 4th and 5th elements of the array
$MyArray[3] = 'THU';
$MyArray[4] = 'xxx';
$MyArray[5] = 'FRI';


for ($i = 0; $i < count($MyArray); $i++) {
    //access element using index number
    echo "Value at position=$i is $MyArray[$i] <br>";

    for ($x = 0; $x < count($toDelete); $x++) {
        if (in_array($toDelete[$x], $MyArray)) {
            echo $toDelete[$x] . ' presente!<br>';
            $keyToDelete = array_search('xxx', $MyArray);
            unset($MyArray[$keyToDelete]);
        }
    }
}

echo '<br>';
var_dump($MyArray);
echo '<hr>';

/*
array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }
*/
$x = array(1, 2, 3, 4, 5);
var_dump($x);

echo '<br>';
var_dump(array_values($x));
unset($x[3]);
/*
array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [4]=> int(5) }
*/
$x = array_values($x);

echo '<br>';
var_dump($x);

/*
array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [4]=> int(5) }

array_values

array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [4]=> int(5) }

array(4) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5) }
*/
