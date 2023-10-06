<?php
    $myfile = fopen("webdicionary.txt", "r") or die ("Unable to open file!");
    echo fgets($myfile);
    fclose($myfile);
?>