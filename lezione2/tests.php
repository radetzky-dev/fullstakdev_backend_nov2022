<!DOCTYPE html>
<html>
<head>
    <title><?php echo "This is the page title"; ?></title>
</head>
<body>
  <?php
  $myValue = 123 + "456";
echo '<br>RISULTATO '. $myValue."<br>";

//var_dump($myValue);
//die();
  ?>
    <p>
    TIME: <?php echo date('H:i'); ?> <br>DAY <?php echo date('d/m/Y'); ?>
    <?php
    $vero = true;
    $falso = false;

    echo $vero.'<br>'.$falso.'<br>---<br>';
    $vero = 1 && 1;
    echo $vero.'<br>';
    $falso = 1 && 0;
        echo $falso.'<br>';

    $vero = 1 || 0;
    $falso = 0 || 0;

    echo $vero.'<br>'.$falso.'<br>---<br>';

    echo round(520.34345, 3); 

?>
    </p>


</body>
</html>
