<?php
  $fp=fopen("kist.txt","w");
  $text="Hello Bit students please submit your assignment til sunday.";
  fwrite($fp,$text);
  fclose($fp);
?>
