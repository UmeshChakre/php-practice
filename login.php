<?php
session_start();

  if(isset($_POST['loginbtn']))
  {
  $username =$_POST['username'];
  $_SESSION['username']= $username;
  header('location:logindisplay.php');
}


?>
<form method="POST">
  <input type="text" name="username">
  <input type="password" name="Password">
  <input type="submit" value="login" name="loginbtn">
</form>
