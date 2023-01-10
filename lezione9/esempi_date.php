<?php

// set the default timezone to use.
date_default_timezone_set('UTC');


// print day
echo date("l");

echo '<br>';

// Prints something like: Monday 8th of August 2005 03:12:46 PM
echo date('l jS \of F Y h:i:s A');

echo '<br>';
//giorno di una date
echo "Gen 10, 2023 is on a " . date("l", mktime(0, 0, 0, 1, 10, 2023));

echo '<br>';
// prints something like: 2000-07-01T00:00:00+00:00
echo date(DATE_ATOM, mktime(0, 0, 0, 1, 10, 2023));

$today = date("F j, Y, g:i a");  
echo $today.'<br>';

//Data e parti utili
$today = date("d m Y");    
echo $today.'<br>';

$onlyDay =  date("d");
echo $onlyDay . '<br>';

$today = date("Y-m-d H:i:s");  

echo $today.'<br>';

echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 1998));
echo '<br>';
echo date("M-d-Y", mktime(0, 0, 0, 1, 1, 98));

$today = getdate();
echo "<pre>";
var_dump($today);
echo "</pre>";
echo '<br>';
$Now = new DateTime('now', new DateTimeZone('Europe/Rome'));
echo  $Now->format('d-m-Y H:i:s');

echo 'Current time: ' . date('Y-m-d H:i:s') . "<br>";

$format = 'Y-m-d';
$date = DateTimeImmutable::createFromFormat($format, '2023-01-10');
echo "Format: $format; " . $date->format('d-m-y H:i:s') . "<br>";

date_default_timezone_set("Europe/Rome");
echo 'Current time: ' . date('Y-m-d H:i:s') . "<br>";

$format = 'Y-m-d';
$date = DateTimeImmutable::createFromFormat($format, '2023-01-10');
echo "Format: $format; " . $date->format('d-m-y H:i:s') . "<br>";

//Set data e set ora
$date = new DateTimeImmutable();
$newDate = $date->setDate(2023, 2, 3);
echo $newDate->format('d-m-y');

$date = new DateTimeImmutable('2001-01-01');

$newDate = $date->setTime(14, 55);
echo $newDate->format('Y-m-d H:i:s') . "<br>";

$newDate = $date->setTime(14, 55, 24);
echo $newDate->format('Y-m-d H:i:s') . "<br>";

//ADD
$date = new DateTime('2023-01-10');
$date->modify('+30 day');
echo "Domani " .$date->format('d-m-Y');


$date->modify('+3 month');
echo "Domani " .$date->format('d-M-Y');

//DIFF

$origin = new DateTimeImmutable('2009-10-09');
$target = new DateTimeImmutable('2009-10-13');
$interval = $origin->diff($target);
echo $interval->format('%R%a days');