<?php
include('../database/config.php');
$roll=1003;
for ($i=0;$i<51050;$i++)
{
	
	
	
	$name=uniqid()."name";
	
	$stmt=$conn->prepare("INSERT INTO `student_data` (`Roll`, `Name`, `Unit`) VALUES ('".$roll."', '".$name."', 'A')");
    $stmt->execute();
	$roll++;
	
}






?>