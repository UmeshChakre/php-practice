<?php
  session_start();
  $_SESSION['id']=10;
  echo "Session ID:  ".$_SESSION['id'];
  echo "Session Email:  ".$_SESSION['email'];
  
?>
