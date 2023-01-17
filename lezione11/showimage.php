<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show my image</title>
    <style>
        img {
            max-width: 300px;
            border: 1px solid black;
            margin: 5px;
        }
    </style>
</head>

<body>
    <h2>Mostra la mia immagine</h2>
    <?php
    $myFolder = 'uploads';

    /**
     * uploadFile
     *
     * @param  mixed $myFile
     * @param  mixed $myFolder
     * @return void
     */
    function uploadFile(mixed $myFile, string $myFolder): void
    {
        $uploadDir = __DIR__ . "/" . $myFolder;
        //TODO check if folder exists, if not create folder

        foreach ($myFile as $file) {
            if (UPLOAD_ERR_OK === $file['error']) {
                $fileName = basename($file['name']);
                $result = move_uploaded_file($file['tmp_name'], $uploadDir . DIRECTORY_SEPARATOR . $fileName);
                if (!$result) {
                    echo '<br>ERROR: Impossibile caricare l\'immagine<br>';
                }
                showImages($myFolder, basename($file['name']));
            }
        }
    }

    /**
     * showImages
     *
     * @param  mixed $myFolder
     * @param  mixed $myLastImage
     * @return void
     */
    function showImages($myFolder, $myLastImage = "")
    {
        echo "Mostro le immagini caricate:<br>";
        $images = dirToArray(__DIR__ . "/" . $myFolder);
        if (is_array($images)) {
            foreach ($images as $key => $value) {
                //TODO if value = myLastImage -> hai caricato questa immagine
                if ((str_ends_with($value, '.png')) || (str_ends_with($value, '.jpg'))) {
    ?>
                    <img src="<?= $myFolder . '/' . $value; ?>" alt="<?= $value; ?>" />
    <?php
                }
            }
        }
    }

    /**
     * dirToArray
     *
     * @param  mixed $dir
     * @return void
     */
    function dirToArray($dir)
    {
        $result = array();
        $cdir = scandir($dir);
        foreach ($cdir as $key => $value) {
            if (!in_array($value, array(".", ".."))) {
                if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) {
                    $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
                } else {
                    $result[] = $value;
                }
            }
        }
        return $result;
    }

    if ($_FILES) {
        uploadFile($_FILES, $myFolder);
        //show all upload files
    } else {
        showImages($myFolder);
    }
    ?>
    <form action="showimage.php" method="post" enctype="multipart/form-data">
        <input type="file" name="file">
        <input type="submit" name="upload" value="Carica file">
    </form>
</body>

</html>