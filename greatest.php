<?php
	$num1=50;
	$num2=10;
	$num3=70;
	$marks=array(80,25,75);

	function findgreatest($val1,$val2,$val3)
	{
		if($val1>$val2 && $val1>$val3)
		{
			echo "var 1 is greatest";
		}
		elseif ($val2>$val1&&$val2>$val3)
		{
			echo "var 2 is greatest";
		}
		else
		{
			echo"var 3 is greatest";
		}		
		
	}
	function arraygreatest($marks)
	{
		if($marks[0]>$marks[1] && $marks[0]>$marks[2])
		{
			echo "var 1 is greatest";
		}
		elseif ($marks[1]>$marks[0]&&$marks[0]>$marks[2])
		{
			echo "var 2 is greatest";
		}
		else
		{
			echo"var 3 is greatest";
		}
	}
	function findsmallest($val1,$val2,$val3)
	{
		if($val1<$val2 && $val1<$val3)
		{
			echo "<br>var 1 is smallest";
		}
		elseif ($val2<$val1&&$val2<$val3)
		{
			echo "<br>var 2 is smallest";
		}
		else
		{
			echo"<br>var 3 is smallest";
		}		
		
	} 
	function greatest($val1)
	{
		
		$val1=$val1+20;	
		
	}
	function smallest(& $val1)
	{
		
		return $val1=$val1-20;	
		
	}
	greatest($num1);
	echo"<br>value of num1 in pass by value is".$num1."<br>";
	echo "<br>value of num 1 in pass by reference is ".smallest($num1)."<br>";
	findgreatest($num1,$num2,$num3);
	findsmallest($num1,$num2,$num3);
	arraygreatest($marks);

	
?>
