<form method="GET">
  <table border=1>
    <tr>
<td>First NUM: </td> <td><input type="text" name="fnum" value="<?php if(isset($_GET['operate']))echo $num1=$_GET['fnum']; ?>"></td>
    </tr>
    <tr>
<td>Second NUM: </td><td> <input  type="text" value="<?php if(isset($_GET['operate']))echo $num2=$_GET['snum']; ?>" name="snum"></td>
</tr>
<tr>
  <td>Operator: </td><td> <input type="text" value="<?php if(isset($_GET['operate']))echo $sign=$_GET['operator']; ?>" name="operator"></td>
</tr>
<tr>
  <td colspan="2">

    <input type="submit" value="Add" name="add">
    <input type="submit" value="Subtract" name="sub">
    <input type="submit" value="Multiply" name="mul">
    <input type="submit" value="Divide" name="div">
  </td>
</tr>
<tr>
  <td >
    <input type="submit" value="operate" name="operate">
  </td>


</form>
<?php




  if(isset($_GET['operate']))
  {
    $num1=$_GET['fnum'];
    $num2=$_GET['snum'];
    $sign=$_GET['operator'];
    operate($num1,$num2,$sign);
  }



  if(isset($_GET['add']))
  {
    $num1=$_GET['fnum'];
    $num2=$_GET['snum'];
    add($num1,$num2);
  }

  if(isset($_GET['sub']))
  {
      $num1=$_GET['fnum'];
      $num2=$_GET['snum'];
      sub($num1,$num2);
  }
  if(isset($_GET['mul']))
  {
        $num1=$_GET['fnum'];
        $num2=$_GET['snum'];
        mul($num1,$num2);
  }
  if(isset($_GET['div']))
  {
          $num1=$_GET['fnum'];
          $num2=$_GET['snum'];
          div($num1,$num2);
  }

  function add($var1,$var2)
  {
    $result=$var1+$var2;
    echo "the sum of two numbers is :".$result."<br>";
  }
  function sub($var1,$var2)
  {
    if($var1>$var2){
        $result=$var1-$var2;
    }

    else {
      $result=$var2-$var1;
    }
    echo "The difference is: ".$result."<br>";
  }
    function mul($var1,$var2)
    {
      $result=$var1*$var2;
      echo "the product is:  ".$result ."<br>";
    }
    function div($var1,$var2)
    {
      if($var1>$var2){
          $result=$var1/$var2;
          $rem=$var1%$var2;
      }

      else {
        $result=$var2/$var1;
        $rem=$var2%$var1;

      }
      echo "The quotent is is: ".$result."<br>";
      echo "the remainder is:".$rem;

    }
    function operate($var1,$var2,$sign)
    {
      switch ($sign) {
        case '+':
        $result=$var1+$var2;
        echo "<td>the sum of two numbers is :".$result."</td></tr><br>";
          break;


          case '-':
          if($var1>$var2){
              $result=$var1-$var2;
          }

          else {
            $result=$var2-$var1;
          }
          echo "<td>The difference is: ".$result."</td></tr><br>";
            break;


            case '*':
            $result=$var1*$var2;
            echo "<td>the Product of two numbers is :".$result."</td></tr><br>";
              break;

              case '/':
              if($var1>$var2){
                  $result=$var1/$var2;
                  $rem=$var1%$var2;
              }

              else {
                $result=$var2/$var1;
                $rem=$var2%$var1;

              }
              echo "<td>The quotent is is: ".$result."<br>";
              echo "the remainder is:".$rem."</td></tr>";
                break;

        default:
         echo "invalid";
          break;
      }
    }


?>
</table>
