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