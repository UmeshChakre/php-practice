<?php
    $fp=fopen("kist.txt","r")or die("unable to open file");
    // echo fgets($fp);

    while(!feof($fp))
    echo fgetc($fp)."<br>";
    fclose($fp);
 ?>
