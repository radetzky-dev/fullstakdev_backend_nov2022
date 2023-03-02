<?php
class Saluta
{
    public function salutoGenerico()
    {
        echo "Hello";
    }
}

$greeting = new Saluta;
$greeting->salutoGenerico();
