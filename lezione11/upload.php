<?php
//phpinfo();

set_time_limit(0);
ini_set('upload_max_filesize', '500M');
ini_set('post_max_size', '500M');
ini_set('max_input_time', 4000); // Play with the values
ini_set('max_execution_time', 4000); // Play with the values

if ($_FILES) {
    var_dump($_FILES);
    echo '<br>';
    echo  sys_get_temp_dir();
    echo '<br>';

    //check error in log apache /Applications/XAMPP/xamppfiles/logs
    //NOTA: fermare XAMPP server (apache) dare i permessi alla due cartelle e poi riavviarlo
    //tail -f /Applications/XAMPP/xamppfiles/logs/php_error_log
    //remember :  sudo chmod -R 777 sulla cartella uploads
    //sudo chmod -R 777 TEMP di xamp /Applications/XAMPP/xamppfiles/temp/
    //e sudo chmod -R 777 su la cartella di destiznazione >/Applications/XAMPP/xamppfiles/htdocs/musa/fullstackdev/backend/lezione11/uploads/
    $uploadDir = __DIR__ . '/uploads';

    echo $uploadDir;
    echo '<br>';

    foreach ($_FILES as $file) {
        // [error] => UPLOAD_ERR_OK  (= 0)
        if (UPLOAD_ERR_OK === $file['error']) {
            $fileName = basename($file['name']);
            echo '<br>->' . $file['tmp_name'];
            echo '<br>->' . $uploadDir . DIRECTORY_SEPARATOR . $fileName;
            $result = move_uploaded_file($file['tmp_name'], $uploadDir . DIRECTORY_SEPARATOR . $fileName);
            if ($result) {
                echo '<br>File uploaded';
            } else {
                echo '<br>ERROR';
            }
        }
    }
}
?>

<form action="upload.php" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" name="upload" value="Carica file">
</form>