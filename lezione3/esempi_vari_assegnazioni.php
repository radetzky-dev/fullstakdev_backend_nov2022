<?php

$x= "hello world";
$x = null;

//esempio di null
var_dump($x);

//esempi operatori aritmetici
$a = 5;
$b = 7;
echo 'Le mie varibili<br>';
echo "a = $a  e b = $b <br><hr>";
echo 'a = '.$a.'  e b = '.$b. '<br><hr>';

echo '<br>Somma<br>';
echo $a+$b;
echo '<br>Sottrazione<br>';
echo $a-$b;
echo '<br>Moltiplicazione<br>';
echo $a*$b;
echo '<br>Divisione<br>';
echo $a/$b;
echo '<br>Modulo <br>';
echo (5 % 3);
echo '<br>Incremento<br>';
$a++;
$b++;
echo "a = $a  e b = $b <br><hr>";
echo '<br>Sottraggo<br>';
$a--;
$b--;
echo "a = $a  e b = $b <br><hr>";

echo "<hr><br>";
echo "Assegnazione<br>";
$a = 3;
$a += 5; // sets $a to 8, as if we had said: $a = $a + 5;
echo $a.'<br>';
$b = "Hello ";
$b .= "There!"; // sets $b to "Hello There!", just like $b = $b . "There!";
echo $b.'<br>';

//TODO
// due variabili delle casistiche https://www.php.net/manual/en/language.operators.comparison.php

//determinare quale numero sia più grande fra 4 e 3 <=> 
//1 maggiore il primo, -1 maggiore il secondo e zero se sono uguali

//esempi
// A e a
// 1 e "1"
if ($a > $b)
{
    
    echo "a is bigger than b<br>";
}







