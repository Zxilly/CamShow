<?php
$file = fopen("photo.pid", "r");
$filenum = (int)fgets($file);
$filenum += 1;
fclose($file);

//var_dump($filename);
$file = fopen("photo.pid", "w");
fwrite($file, $filenum);
fclose($file);
file_put_contents('dat.csv', "$filenum.jpg,", FILE_APPEND);

move_uploaded_file($_FILES["file"]["tmp_name"], "images/" . $filenum . ".jpg");
header('Location: /');
