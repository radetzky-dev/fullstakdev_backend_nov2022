<?php
$i = 0;
do {
    echo "<br>stampo una volta sola " . $i;
} while ($i > 0);
echo '<hr>';
do {
    $i++;
    echo "<br>stampo i " . $i;
} while ($i < 2);

echo '<hr>';
while ($i <= 10) {
    echo $i++;  /* the printed value would be
                   $i before the increment
                   (post-increment) */
                   echo "<br>";
}

$alunni = 7;

for ($i = 1; $i <= $alunni; $i++) {
    echo "Alunno numero ".$i."<br>";
}

echo '<hr>';

$arr = array(1, 2, 3, 4);

foreach ($arr as &$value) {
    echo $value .' prima del raddoppio <br>';
    $value = $value * 2;
}

var_dump($arr);

foreach ($arr as $value) {
    echo $value .'<br>';
}

echo '<hr>';

// $arr is now array(2, 4, 6, 8)

// without an unset($value), $value is still a reference to the last item: $arr[3]

foreach ($arr as $key => $value) {
    // $arr[3] will be updated with each value from $arr...
    echo " chiave {$key} => {$value} ";
    //print_r($arr);
}

echo '<hr>';

function myResult()
{
 return array('uno', 'due', 'tre','quattro');
}

// Listing all the variables
list($drink, $color, $power, $four) = myResult();
echo "$drink is $color and $power makes it special $four.\n";

var_dump($drink);

echo '<br>FINE<br>';
