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
$myVar= false;
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
Entra se falso<br>
@unless ($myVar)
    <a href="vaiqui">clicca</a>
@endunless

@if (!$myVar)
    <a href="vaiqui">clicca qua</a>
@endif

<?php
$prova=null;

?>

@empty($prova)
    <!--  $records is "empty"...  -->
    <?php $prova=2;
    //commento php
    ?>
@endempty

@isset($prova)
    <!--  $records is defined and is not null... -->
    {{-- commento blade --}}
    dentro isset
@endisset

@auth
    Sei autenticato
@endauth
 
@env('local')
    Sono in locale mostro le variabili {{$test}} per il mi DEBUG
@endenv

@env('production')
   Benvenuto in produzione!
@endenv

@sectionMissing('navigation')
    <div class="pull-right">
        MOSTRO MENU A DESTRA<br>
    </div>
@endif

@guest
    Sei un visitatore
@endguest
 



<hr>
@if (count($records) === 1)
    I have one record!
@elseif (count($records) > 1)
    I have multiple records!
@else
    I don't have any records!
@endif
