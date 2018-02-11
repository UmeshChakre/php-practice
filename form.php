<form method="get">
	Name:<input type="text" name="fname"/><br/>
	Address:<input type="text" name="address"/>
	<button type="submit" name="savebtn">SAVE </button>
</form>
<?php
if(isset($_GET['savebtn']))
{
	if(!empty($_GET['fname']))
	{
		echo "Your name is ".$_GET['fname'].".<br>";
	}
	if(!empty($_GET['address']))
	{
		echo "your address is".$_GET['address'];
	}
}


?>