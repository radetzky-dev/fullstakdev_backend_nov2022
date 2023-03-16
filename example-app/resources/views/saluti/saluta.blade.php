<h2>Ciao</h2>
<p>Tu ti chiami {{$name}} e hai {{$age}}</p>

<?php

var_dump($vars);

foreach ($vars as $key => $value) {
    echo "$key e $value <br>";
}