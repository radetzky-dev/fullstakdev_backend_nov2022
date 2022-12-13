<?php
$myName = 'Paolo';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Varie</title>
</head>
<body>
<h1>Questa è una pagina HTML con PHP</h1>
    
<p> Ciao <?=$myName; ?>, benvenuto nel mio sito</p>

<?php
  $eta = array ('Mario' => 38, "Piero" =>35, "Gino" => "81");

   print implode(" and ", $eta);
  //var_dump($eta);

 // echo '<hr>';

 // print_r($eta);
?>
</body>
</html>