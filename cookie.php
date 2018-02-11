<?php
  $cookieName = "user";
  $cookieValue = "Basanta Pandey";
  setcookie($cookieName,$cookieValue,time()+(86400*30));
  //sets cookie for 1 month
  if(isset($_COOKIE[$cookieName]))
  {
    echo "value set in ".$cookieName. "is:".$_COOKIE[$cookieName];
  }
 ?>
