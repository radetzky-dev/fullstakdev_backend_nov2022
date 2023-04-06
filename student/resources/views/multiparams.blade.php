<?php

$mario ="Mario";
echo $nome . ' ' . $cognome . ' ' . $age.'<br>';
$test = "è&€\$";

$array = ["name" => "barryvdh/laravel-dompdf",
    "description" => "A DOMPDF Wrapper for Laravel",
    "license"=> "MIT",
];

$records= ['uno','due'];
$num =2;
?>

Ciao <b>{{$nome}}</b> {{$cognome}} <i>{{$age}}</i> {{$mario}} <br>

Chiamare funzione TIME {{ date('l')}}


Stampo {{ $test}}

<hr>

@if ($num === 1)
    Uno
@elseif ($num > 1)
    Maggiore di 1
@else
    Zero
@endif

<hr>
@if (count($records) === 1)
    I have one record!
@elseif (count($records) > 1)
    I have multiple records!
@else
    I don't have any records!
@endif
