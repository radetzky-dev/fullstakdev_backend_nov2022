<?php

/*
Write a PHP script to extract the user name from the following email 
Sample String : 'paolo@example.com'
Expected Output : 'paolo'
*/

$myMail  = 'paolo@example.com';
$domain = strstr($myMail, '@');
echo "<br>Il dominio della mail è ".$domain; // TODO visualizzare dominio senza @

$user = strstr($myMail, '@', true);
echo "<br>Il tuo user è ".$user; // prints name