<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pasticceria MUSA</title>

    <style>
        h1 {
        background-color: lightskyblue;
        color: white;
        text-align: center;
        }

        h3 {
            text-align: center;
        }

        table {
            width:30%;
        }

        td {
            border: 1px solid black;
            text-align: center;
        }

        #today {
            position: fixed;
            top: 0;
            margin: 20px;
            text-align: center;
        }

    </style>
</head>
<body>
    <?php
    
    $name = "Flavio";
    $dolce1 = 'Tiramisù';
    $dolce2 = 'Gelato';
    $dolce3 = 'Torta al cioccolato';
    $prezzo1 = '5€';
    $prezzo2 = '3€';
    $prezzo3 = '4€';

    function saluto($name) {
        echo "<h1>Ciao " . $name . "!</h1> 
              <h3>Benvenuto alla pasticceria MUSA</h3>
              <hr>";
    }

    function elencaDolci($dolce1,$dolce2,$dolce3,$prezzo1,$prezzo2,$prezzo3) {
        echo "<h2>Ecco l'elenco dei nostri dolci:</h2>
          <table>
          <tr>
              <td>Dolce</td>
              <td>Prezzo</td>
            </tr>
            <tr>
              <td>$dolce1</td>
              <td>$prezzo1</td>
            </tr>
            <tr>
              <td>$dolce2</td>
              <td>$prezzo2</td>
            </tr>
            <tr>
              <td>$dolce3</td>
              <td>$prezzo3</td>
            </tr>
          </table>";
    }

    saluto($name);
    elencaDolci($dolce1,$dolce2,$dolce3,$prezzo1,$prezzo2,$prezzo3);
    ?>

    <p id="today">
        Giorno: <?php echo date('d/m/Y');?> -     
        Ora: <?php echo date('H:i');?>        
    </p>
    
</body>
</html>
