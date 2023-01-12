<!DOCTYPE html>
<html>
<head>
    <title>Chunkify Form</title>
</head>
<body>
    <?php

    $word   = "";
    $number = "";

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && array_key_exists('chunkify', $_POST)) {

        $word   = $_POST['word'];
        $number = $_POST['number'];

        //arrotonda numero parole https://www.php.net/manual/en/function.ceil
        $chunks = ceil(strlen($word) / (int)($number));

        echo "The {$number} - letter chunks of '{$word}' are: <br />";

        for ($i = 0; $i < $chunks; $i++) {
            //echo 'Valore '. ($i*$number). '<br>';
            $chunk = substr($word, $i * $number, $number);
            printf("%d: %s <br />", $i + 1, $chunk);
        }

        echo "<br />";
    }

    ?>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        Enter a word: <input type="text" name="word" value="<?php echo $word ?>"><br />
        How long should the chunks be?
        <input type="text" name="number" value="<?php echo $number ?>"><br />
        <input type="submit" name="chunkify" value="chunkify">
    </form>
</body>
</html>