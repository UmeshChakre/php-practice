<?php
  function add($var1,$var2)
  {
    $result=$var1+$var2;
    echo "the sum of two numbers is :".$result."<br>";
  }
  function subtract($var1,$var2)
  {
    if($var1>$var2){
        $result=$var1-$var2;
    }

    else {
      $result=$var2-$var1;
    }
    echo "The difference is: ".$result."<br>";
  }
    function multiply($var1,$var2)
    {
      $result=$var1*$var2;
      echo "the product is:  ".$result ."<br>";
    }
  add(2,3);
  subtract(2,3);
  multiply(2,3);

?>
