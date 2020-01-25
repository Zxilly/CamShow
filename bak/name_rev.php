<?php
$photoname = $_POST['photoname'];
$photodes = $_POST['photodes'];

file_put_contents('dat.csv', "$photoname,$photodes\n", FILE_APPEND);

//header('Location: /admin.html');
