
<?php
    $filename = "newfile.txt";
    $file = fopen( $filename, "w");

    if ($file == false) {
        echo "Error opening new file";
        exit();
    }
    $str =<<<STR
    This is first\n
    This is second\n
    This is third
    STR;

    fwrite($file, $str);
    fclose($file);
    echo "File created!";
?>
