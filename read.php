<?php
$filename = "newfile.txt";
    $file = fopen($filename, "r");

    if ($file == false) {
        echo "Failed to read!";
        exit();
    }
    while (!feof($file)) {
        echo fgets($file) . "<br>";
    }
fclose($file);
?>