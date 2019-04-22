<?php

include('../database/config.php');
$subject=array(); #array which holds the number of seat left in any of the subject in A unit
$subject['B.Sc in Agriculture (Honours) [B.Sc.Ag. (Hons.)]']=$_POST['Ag'];
$subject['B.Sc in Fisheries (Honours) [B.Sc. Fisheries (Hons.)]']=$_POST['fisheries'];
$subject['Doctor of Veterinary Medicine (DVM)']=$_POST['DVM'];
$subject['B.Sc in Disaster Management (Honours) [B.Sc. DM. (Hons.)]']=$_POST['DM'];
$subject['B.Sc in Animal Husbandry B.Sc. Animal (Honours) [ B. Sc AH (Hons.)]']=$_POST['AH'];
$subject['B.Sc in Nutrition and Food Science (Honours) [B.Sc. NFS . (Hons.)]']=$_POST['NFS'];
$subject['B.Sc in Land Management and Administration (Honours) [ B. Sc LMA(Hons.) ]']=$_POST['LMA'];
$subject['']=0;
$quota=$_POST['selected_text'];
$unit=$_POST['unit'];
#$stmt = $conn->prepare("SELECT * FROM posted_data WHERE UNIT='A' order by MERIT ASC");
if($unit=='C')
{
	$stmt= $conn->prepare("update posted_data set selected_subject='B.Sc in CSE (Engineering) [B.Sc.CSE. (Engg.)]' where UNIT='C'");
	$stmt->execute();
	
}
if($unit=='B')
{
	$stmt= $conn->prepare("update posted_data set selected_subject='BBA in Bussiness Administration & Management' where UNIT='B'");
	$stmt->execute();
	
}
if($quota=='No Qouta(for normal student)')
{
try{
		
	
	foreach($conn->query("SELECT * FROM posted_data WHERE UNIT='A' order by MERIT ASC") as $row) {
    #echo $row['l1'].' '.$row['l2'].' '.$row['l3'].' '.$row['l4'];
	$d=$row['MERIT'];
	for($i=1;$i<=7;$i++)
	{
		if($subject[$row['choice_'.$i]]!=0)
		{
			$stmt= $conn->prepare("update posted_data set selected_subject='".$row['choice_'.$i]."' where MERIT=$d and UNIT='A'");
		    $stmt->execute();
			$subject[$row['choice_'.$i]]--;
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
else if($quota=='FFQ')
{
	try{
		
	
	foreach($conn->query("SELECT * FROM posted_data WHERE UNIT='A' order by MERIT ASC") as $row) {
    #echo $row['l1'].' '.$row['l2'].' '.$row['l3'].' '.$row['l4'];
	$d=$row['MERIT'];
	for($i=1;$i<=7;$i++)
	{
		if($subject[$row['choice_'.$i]]!=0 && $row['QUOTA']=='FFQ' && $row['selected_subject']==NULL)
		{
			$stmt= $conn->prepare("update posted_data set selected_subject='".$row['choice_'.$i]."' where MERIT=$d and UNIT='A'");
		    $stmt->execute();
			$subject[$row['choice_'.$i]]--;
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
else if($quota=='TRIBLEQ')
{
	try{
		
	
	foreach($conn->query("SELECT * FROM posted_data WHERE UNIT='A' order by MERIT ASC") as $row) {
    #echo $row['l1'].' '.$row['l2'].' '.$row['l3'].' '.$row['l4'];
	$d=$row['MERIT'];
	for($i=1;$i<=7;$i++)
	{
		if($subject[$row['choice_'.$i]]!=0 && $row['QUOTA']=='TQ' && $row['selected_subject']==NULL)
		{
			$stmt= $conn->prepare("update posted_data set selected_subject='".$row['choice_'.$i]."' where MERIT=$d and UNIT='A'");
		    $stmt->execute();
			$subject[$row['choice_'.$i]]--;
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
else if($quota=='WARDQ')
{
	try{
		
	
	foreach($conn->query("SELECT * FROM posted_data WHERE UNIT='A' order by MERIT ASC") as $row) {
    #echo $row['l1'].' '.$row['l2'].' '.$row['l3'].' '.$row['l4'];
	$d=$row['MERIT'];
	for($i=1;$i<=7;$i++)
	{
		if($subject[$row['choice_'.$i]]!=0 && $row['QUOTA']=='WQ' && $row['selected_subject']==NULL)
		{
			$stmt= $conn->prepare("update posted_data set selected_subject='".$row['choice_'.$i]."' where MERIT=$d and UNIT='A'");
		    $stmt->execute();
			$subject[$row['choice_'.$i]]--;
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
else if($quota=='HDQ')
{
	try{
		
	
	foreach($conn->query("SELECT * FROM posted_data WHERE UNIT='A' order by MERIT ASC") as $row) {
    #echo $row['l1'].' '.$row['l2'].' '.$row['l3'].' '.$row['l4'];
	$d=$row['MERIT'];
	for($i=1;$i<=7;$i++)
	{
		if($subject[$row['choice_'.$i]]!=0 && $row['QUOTA']=='HDQ' && $row['selected_subject']==NULL)
		{
			$stmt= $conn->prepare("update posted_data set selected_subject='".$row['choice_'.$i]."' where MERIT=$d and UNIT='A'");
		    $stmt->execute();
			$subject[$row['choice_'.$i]]--;
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
else if($quota=='FWQ')
{
	try{
		
	
	foreach($conn->query("SELECT * FROM posted_data WHERE UNIT='A' order by MERIT ASC") as $row) {
    #echo $row['l1'].' '.$row['l2'].' '.$row['l3'].' '.$row['l4'];
	$d=$row['MERIT'];
	for($i=1;$i<=7;$i++)
	{
		if($subject[$row['choice_'.$i]]!=0 && $row['QUOTA']=='FWQ' && $row['selected_subject']==NULL)
		{
			$stmt= $conn->prepare("update posted_data set selected_subject='".$row['choice_'.$i]."' where MERIT=$d and UNIT='A'");
		    $stmt->execute();
			$subject[$row['choice_'.$i]]--;
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
else if($quota=='BKSPQ')
{
	try{
		
	
	foreach($conn->query("SELECT * FROM posted_data WHERE UNIT='A' order by MERIT ASC") as $row) {
    #echo $row['l1'].' '.$row['l2'].' '.$row['l3'].' '.$row['l4'];
	$d=$row['MERIT'];
	for($i=1;$i<=7;$i++)
	{
		if($subject[$row['choice_'.$i]]!=0 && $row['QUOTA']=='BKSP' && $row['selected_subject']==NULL)
		{
			$stmt= $conn->prepare("update posted_data set selected_subject='".$row['choice_'.$i]."' where MERIT=$d and UNIT='A'");
		    $stmt->execute();
			$subject[$row['choice_'.$i]]--;
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
else if($quota=='PDQ')
{
	try{
		
	
	foreach($conn->query("SELECT * FROM posted_data WHERE UNIT='A' order by MERIT ASC") as $row) {
    #echo $row['l1'].' '.$row['l2'].' '.$row['l3'].' '.$row['l4'];
	$d=$row['MERIT'];
	for($i=1;$i<=7;$i++)
	{
		if($subject[$row['choice_'.$i]]!=0 && $row['QUOTA']=='PDQ' && $row['selected_subject']==NULL)
		{
			$stmt= $conn->prepare("update posted_data set selected_subject='".$row['choice_'.$i]."' where MERIT=$d and UNIT='A'");
		    $stmt->execute();
			$subject[$row['choice_'.$i]]--;
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
?>