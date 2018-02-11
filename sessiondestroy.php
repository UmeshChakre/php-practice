<?php
 session_start();
 echo "Session ID:  ".$_SESSION['id'];
 echo "Session email".$_SESSION['email'];
 session_destroy();

?>
