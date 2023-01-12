<?php

$pageAccesses = array_key_exists('accesses', $_COOKIE) ? $_COOKIE['accesses'] : 0;
setcookie('accesses', ++$pageAccesses);

//print_r($_GET);
//print_r($_POST);
//print_r($_FILES);

if ($_SERVER['REQUEST_METHOD'] == 'POST'
    && array_key_exists('toProcess', $_FILES)){
	$pathToFile = 'path/to/put/file/';
	if (is_uploaded_file($_FILES['toProcess']['tmp_name'])) {
		echo "file caricato con successo";
        $fileName = "uploadedFile.xlsx";
        if (is_dir($pathToFile))
            move_uploaded_file($_FILES['toProcess']['tmp_name'], $pathToFile . $fileName);
	} else {
        echo "file non caricato";
    }
}

?>
<html>
<head>
	<title>File Upload</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>"
      enctype="multipart/form-data"
      method="POST">
<!--	<input type="hidden" name="MAX_FILE_SIZE" VALUE="10240">-->

    Name: <input type="text" name="something">
    File name: <input type="file" name="toProcess">
	<input type="submit" value="Upload">
</form>
</body>
</html>