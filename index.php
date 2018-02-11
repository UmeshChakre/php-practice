<?php
	print"This is a test";
	$five= 2 + 3;
	echo "<br>".$five;
	$salaries=array("Real madrid","Manchester United","Chelsea");
	echo"<br>Second element is" .$salaries[1];
	$mine=array(
			"umesh"=>array(
				"web"=>50,
				"java"=>50,
				"database"=>50
			),
			"vaijan"=>array(
				"web"=>60,
				"java"=>70,
				"database"=>45
			),
				"umesh"=>array(
				"web"=>50,
				"java"=>50,
				"database"=>50
			),
			"vaijan"=>array(
				"web"=>60,
				"java"=>70,
				"database"=>45
			)
		);
	echo"<br>sadsad"."<br>".$mine['umesh']['java'];
	if($mine['umesh']['java']>40)
	{
			echo"PASs";
	}
	$day=date("D");
	switch($day)
	{
		case "Sun":
		echo" Today is Sunday";
		break;

		case "Mon":
		echo "Today is Monday";
		break;

		case "Tue":
		echo "Today is Tuesday";
		break;

		case "Wed":
		echo "Today is Wednesday";
		break;

		case "Thu" :
		echo "Today os thursday";
		break;

		case "Fri":
			echo"Today is friday";
		break;

		case "Sat":
			echo"Today is Saturday";
		break;

		default:
		echo"Invalid";

	}
$student=array(
		'umesh'=>array(
			'computergraphics'=>80,
			'stats'=>70,
			'web2'=>80,
			'datacommunication'=>65,
			'operatingsystem'=>85,
			'ethics'=>55
		),
		'ronaldo'=>array(
			'computergraphics'=>99,
			'stats'=>99,
			'web2'=>99,
			'datacommunication'=>99,
			'operatingsystem'=>99,
			'ethics'=>99
		),
		'bale'=>array(
			'computergraphics'=>85,
			'stats'=>75,
			'web2'=>85,
			'datacommunication'=>75,
			'operatingsystem'=>95,
			'ethics'=>65
		),
		'benzema'=>array(
			'computergraphics'=>70,
			'stats'=>70,
			'web2'=>70,
			'datacommunication'=>55,
			'operatingsystem'=>85,
			'ethics'=>45
		),
		'ramos'=>array(
			'computergraphics'=>80,
			'stats'=>70,
			'web2'=>80,
			'datacommunication'=>65,
			'operatingsystem'=>75,
			'ethics'=>75
		),
		'kroos'=>array(
			'computergraphics'=>90,
			'stats'=>100,
			'web2'=>90,
			'datacommunication'=>96,
			'operatingsystem'=>98,
			'ethics'=>99
		),
		'modric'=>array(
			'computergraphics'=>90,
			'stats'=>90,
			'web2'=>90,
			'datacommunication'=>95,
			'operatingsystem'=>85,
			'ethics'=>55
		),
		'carvajal'=>array(
			'computergraphics'=>80,
			'stats'=>70,
			'web2'=>80,
			'datacommunication'=>85,
			'operatingsystem'=>85,
			'ethics'=>95
		),


);
echo "<br><br>Marks of Umesh in web 2 is:  ".$student['umesh']['web2'];
echo "<br><br>Marks of ronaldo in web 2 is:  ".$student['ronaldo']['web2'];
echo "<br><br>Marks of bale in web 2 is:  ".$student['bale']['web2'];
echo "<br><br>Marks of benzema in web 2 is:  ".$student['benzema']['web2'];
echo "<br><br>Marks of ramos in web 2 is:  ".$student['ramos']['web2'];
echo "<br><br>Marks of kroos in web 2 is:  ".$student['kroos']['web2'];
echo "<br><br>Marks of modric in web 2 is:  ".$student['modric']['web2'];
echo "<br><br>Marks of carvajal in web 2 is:  ".$student['carvajal']['web2'];

echo "<br>";
$a=0;
do {
	echo "this is dowhile<br>";
	$a++;
} while ($a <= 10);
echo "<br><br><br>";

$arr=array('umesh','ronaldo','libish','vaijaan','milan','bale');
$length=count($arr);
echo $length;
for($i=0;$i<$length;$i++)
{
	echo $arr[$i]."<br>";
}
?>
