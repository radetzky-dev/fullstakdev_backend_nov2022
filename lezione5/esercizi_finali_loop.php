<?php
$i = 1;

while ($i <= 10) {
    echo $i++;
    echo "<br>";
}
echo "<hr>";


$num=0;
$somma =0;

while($num <= 30)  {
   $somma = $somma+$num;
   $num++;
} 

echo "Totale ".$somma;
echo "<br>";