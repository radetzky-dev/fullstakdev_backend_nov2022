<?php
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