<?php

include('../database/config.php');
$hall=array();
$hall['SHER-E-BANGLA HALL-1 (Male)']=$_POST['s1'];
$hall['SHER-E-BANGLA HALL-2 (Male)']=$_POST['s2'];
$hall['M. KERAMAT ALI HALL (Male)']=$_POST['mk'];
$hall['BANGABANDHU SHEIKH MUJIBUR RAHMAN HALL (Male)']=$_POST['bs'];
$hall['KOBI BEGUM SUFIA KAMAL HALL (Female)']=$_POST['ks'];
$hall['SHEIKH FAJILATUNNESSA MUJIB HALL (Female)']=$_POST['sf'];
$hall['CPT. MOHIUDDIN JAHANGIR HALL (ANSVM Campus - Male)']=$_POST['mj'];
$hall['SHEIKH FAJILATUNNESSA MUJIB HALL (ANSVM Campus - Female)']=$_POST['sfa'];
$hall['']=0;
$j=0;
//$stmt = $conn->prepare("SELECT * FROM posted_data WHERE UNIT='A' order by MERIT ASC");
if($_POST['unit']=='A')
{
try{
		
	
	foreach($conn->query("SELECT * FROM posted_data WHERE UNIT='A' and flag=3 order by MERIT ASC") as $row) {
    //echo $row['l1'].' '.$row['l2'].' '.$row['l3'].' '.$row['l4'];
	$d=$row['MERIT'];
	if($row['selected_subject']=='Doctor of Veterinary Medicine (DVM)'||$row['selected_subject']=='B.Sc in Animal Husbandry B.Sc. Animal (Honours) [ B. Sc AH (Hons.)]')
	{
		if($row['SEX']=='Male')
		{
			$stmt= $conn->prepare("update posted_data set selected_hall='CPT. MOHIUDDIN JAHANGIR HALL (ANSVM Campus - Male)' where MERIT=$d and UNIT='A'");
		    $stmt->execute();
			$hall['CPT. MOHIUDDIN JAHANGIR HALL (ANSVM Campus - Male)']--;
		}
		else if($row['SEX']=='Female')
		{
			$stmt= $conn->prepare("update posted_data set selected_hall='SHEIKH FAJILATUNNESSA MUJIB HALL (ANSVM Campus - Female)' where MERIT=$d and UNIT='A'");
		    $stmt->execute();
			$hall['SHEIKH FAJILATUNNESSA MUJIB HALL (ANSVM Campus - Female)']--;
		}
		continue;
	}
	if($row['SEX']=='Male')
	{
		$j=4;
	}
	else $j=2;
	for($i=1;$i<=$j;$i++)
	{
		if($hall[$row['hall_choice_'.$i]]!=0 && $row['hall_choice_'.$i]!='CPT. MOHIUDDIN JAHANGIR HALL (ANSVM Campus - Male)' && $row['hall_choice_'.$i]!='SHEIKH FAJILATUNNESSA MUJIB HALL (ANSVM Campus - Female)')
		{
			$stmt= $conn->prepare("update posted_data set selected_hall='".$row['hall_choice_'.$i]."' where MERIT=$d and UNIT='A'");
		    $stmt->execute();
			$hall[$row['hall_choice_'.$i]]--;
			break;
		}
	}

}
	
	}
	
	catch(PDOException $e)
    {
    echo 'Error: ' . $e->getMessage();
    }
}
else if($_POST['unit']=='B')
{
	try{
		
	
	foreach($conn->query("SELECT * FROM posted_data WHERE UNIT='B' order by MERIT ASC") as $row) {
    //echo $row['l1'].' '.$row['l2'].' '.$row['l3'].' '.$row['l4'];
	$d=$row['MERIT'];
	if($row['selected_subject']=='Doctor of Veterinary Medicine (DVM)'||$row['selected_subject']=='B.Sc in Animal Husbandry B.Sc. Animal (Honours) [ B. Sc AH (Hons.)]')
	{
		continue;
	}
	if($row['SEX']=='Male')
	{
		$j=4;
	}
	else $j=2;
	for($i=1;$i<=$j;$i++)
	{
		if($hall[$row['hall_choice_'.$i]]!=0)
		{
			$stmt= $conn->prepare("update posted_data set selected_hall='".$row['hall_choice_'.$i]."' where MERIT=$d and UNIT='B'");
		    $stmt->execute();
			$hall[$row['hall_choice_'.$i]]--;
			break;
		}
	}

}
	
	}
	
	catch(PDOException $e)
    {
    echo 'Error: ' . $e->getMessage();
    }
}
else if($_POST['unit']=='C')
{
try{
		
	
	foreach($conn->query("SELECT * FROM posted_data WHERE UNIT='C' order by MERIT ASC") as $row) {
    //echo $row['l1'].' '.$row['l2'].' '.$row['l3'].' '.$row['l4'];
	$d=$row['MERIT'];
	if($row['selected_subject']=='Doctor of Veterinary Medicine (DVM)'||$row['selected_subject']=='B.Sc in Animal Husbandry B.Sc. Animal (Honours) [ B. Sc AH (Hons.)]')
	{
		continue;
	}
	if($row['SEX']=='Male')
	{
		$j=4;
	}
	else $j=2;
	for($i=1;$i<=$j;$i++)
	{
		if($hall[$row['hall_choice_'.$i]]!=0)
		{
			$stmt= $conn->prepare("update posted_data set selected_hall='".$row['hall_choice_'.$i]."' where MERIT=$d and UNIT='C'");
		    $stmt->execute();
			$hall[$row['hall_choice_'.$i]]--;
			break;
		}
	}

}
	
	}
	
	catch(PDOException $e)
    {
    echo 'Error: ' . $e->getMessage();
    }
}
header("Location:../migrationView/hall_merit.php")
?>