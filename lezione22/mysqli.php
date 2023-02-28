<?php

$mysqli = new mysqli("localhost", "root", "", "marketplacemusa");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

echo "connessione avvenuta con successo!<br>";

$mysqli = null;

echo "disconnesso<br>";