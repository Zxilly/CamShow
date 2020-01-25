<?php
//$photoname = $_GET['photoname'];
//$photodes = $_GET['photodes'];
var_dump($_SERVER);

foreach ($_SERVER as $key => $value) {
    if ($key === 'HTTP_PHOTONAME') {
        $photoname = $value;
    }
    if ($key === 'HTTP_PHOTODES') {
        $photodes = $value;
    }
}

$file = fopen("photo.pid", "r");
$filenum = (int)fgets($file);
$filenum += 1;
fclose($file);

//var_dump($filename);
$file = fopen("photo.pid", "w");
fwrite($file, $filenum);
fclose($file);

move_uploaded_file($_FILES["file"]["tmp_name"], "images/" . $filenum . ".jpg");

file_put_contents('dat.csv', "$filenum.jpg,", FILE_APPEND);
file_put_contents('dat.csv', "$photoname,$photodes\n", FILE_APPEND);
