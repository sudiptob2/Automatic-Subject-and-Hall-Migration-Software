<?php

include('../includes/header.php');

?>
<?php

include('../database/config.php');
			$stmt= $conn->prepare("update posted_data set selected_subject=NULL where flag=2 and UNIT='A'");
		    $stmt->execute();
			
try{
		
	$subject2=array("B.Sc in Agriculture (Honours) [B.Sc.Ag. (Hons.)]","B.Sc in Disaster Management (Honours) [B.Sc. DM. (Hons.)]","B.Sc in Nutrition and Food Science (Honours) [B.Sc. NFS . (Hons.)]","B.Sc in Fisheries (Honours) [B.Sc. Fisheries (Hons.)]","Doctor of Veterinary Medicine (DVM)","B.Sc in Animal Husbandry B.Sc. Animal (Honours) [ B. Sc AH (Hons.)]","B.Sc in Land Management and Administration (Honours) [ B. Sc LMA(Hons.) ]");
	$subject=array();
	$quota="No Qouta(for normal student)";
	$i=0;
	foreach($conn->query("select merit from seat_data order by id ASC") as $row) {
	$subject[$subject2[$i]]=$row['merit'];
	$i++;
	$subject['']=0;
	
    }
	
   }


	
	catch(PDOException $e)
    {
    echo 'Error: ' . $e->getMessage();
    }
	try{
		
	
	foreach($conn->query("SELECT * FROM posted_data WHERE UNIT='A' order by MERIT ASC") as $row) {
    #echo $row['l1'].' '.$row['l2'].' '.$row['l3'].' '.$row['l4'];
	$d=$row['MERIT'];
	for($i=1;$i<=7;$i++)
	{
		if($subject[$row['choice_'.$i]]!=0 && $row['selected_subject']==NULL && $row['flag']==2)
		{
			$stmt= $conn->prepare("update posted_data set selected_subject='".$row['choice_'.$i]."',flag=3 where MERIT=$d and UNIT='A'");
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
	try{
		
	$subject2=array("B.Sc in Agriculture (Honours) [B.Sc.Ag. (Hons.)]","B.Sc in Disaster Management (Honours) [B.Sc. DM. (Hons.)]","B.Sc in Nutrition and Food Science (Honours) [B.Sc. NFS . (Hons.)]","B.Sc in Fisheries (Honours) [B.Sc. Fisheries (Hons.)]","Doctor of Veterinary Medicine (DVM)","B.Sc in Animal Husbandry B.Sc. Animal (Honours) [ B. Sc AH (Hons.)]","B.Sc in Land Management and Administration (Honours) [ B. Sc LMA(Hons.) ]");
	$subject=array();
	$quota="FFQ";
	$i=0;
	foreach($conn->query("select FFQ from seat_data order by id ASC") as $row) {
	$subject[$subject2[$i]]=$row['FFQ'];
	$i++;
	
    }
	$subject['']=0;
	
   }


	
	catch(PDOException $e)
    {
    echo 'Error: ' . $e->getMessage();
    }
	try{
		
	
	foreach($conn->query("SELECT * FROM posted_data WHERE UNIT='A' order by MERIT ASC") as $row) {
    #echo $row['l1'].' '.$row['l2'].' '.$row['l3'].' '.$row['l4'];
	$d=$row['MERIT'];
	for($i=1;$i<=7;$i++)
	{
		if($subject[$row['choice_'.$i]]!=0 && $row['QUOTA']=='FFQ' && $row['selected_subject']==NULL && $row['flag']==2)
		{
			$stmt= $conn->prepare("update posted_data set selected_subject='".$row['choice_'.$i]."',flag=3 where MERIT=$d and UNIT='A'");
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
	try{
		
	$subject2=array("B.Sc in Agriculture (Honours) [B.Sc.Ag. (Hons.)]","B.Sc in Disaster Management (Honours) [B.Sc. DM. (Hons.)]","B.Sc in Nutrition and Food Science (Honours) [B.Sc. NFS . (Hons.)]","B.Sc in Fisheries (Honours) [B.Sc. Fisheries (Hons.)]","Doctor of Veterinary Medicine (DVM)","B.Sc in Animal Husbandry B.Sc. Animal (Honours) [ B. Sc AH (Hons.)]","B.Sc in Land Management and Administration (Honours) [ B. Sc LMA(Hons.) ]");
	$subject=array();
	$quota="TQ";
	$i=0;
	foreach($conn->query("select TQ from seat_data order by id ASC") as $row) {
	$subject[$subject2[$i]]=$row['TQ'];
	$i++;
	
    }
	$subject['']=0;
   }
   catch(PDOException $e)
    {
    echo 'Error: ' . $e->getMessage();
    }
	try{
		
	
	foreach($conn->query("SELECT * FROM posted_data WHERE UNIT='A' order by MERIT ASC") as $row) {
    #echo $row['l1'].' '.$row['l2'].' '.$row['l3'].' '.$row['l4'];
	$d=$row['MERIT'];
	for($i=1;$i<=7;$i++)
	{
		if($subject[$row['choice_'.$i]]!=0 && $row['QUOTA']=='TQ' && $row['selected_subject']==NULL && $row['flag']==2)
		{
			$stmt= $conn->prepare("update posted_data set selected_subject='".$row['choice_'.$i]."',flag=3 where MERIT=$d and UNIT='A'");
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
	try{
		
	$subject2=array("B.Sc in Agriculture (Honours) [B.Sc.Ag. (Hons.)]","B.Sc in Disaster Management (Honours) [B.Sc. DM. (Hons.)]","B.Sc in Nutrition and Food Science (Honours) [B.Sc. NFS . (Hons.)]","B.Sc in Fisheries (Honours) [B.Sc. Fisheries (Hons.)]","Doctor of Veterinary Medicine (DVM)","B.Sc in Animal Husbandry B.Sc. Animal (Honours) [ B. Sc AH (Hons.)]","B.Sc in Land Management and Administration (Honours) [ B. Sc LMA(Hons.) ]");
	$subject=array();
	$quota="WQ";
	$i=0;
	foreach($conn->query("select WARDQ from seat_data order by id ASC") as $row) {
	$subject[$subject2[$i]]=$row['WARDQ'];
	$i++;
	
    }
	$subject['']=0;
   }
   catch(PDOException $e)
    {
    echo 'Error: ' . $e->getMessage();
    }
	try{
		
	
	foreach($conn->query("SELECT * FROM posted_data WHERE UNIT='A' order by MERIT ASC") as $row) {
    #echo $row['l1'].' '.$row['l2'].' '.$row['l3'].' '.$row['l4'];
	$d=$row['MERIT'];
	for($i=1;$i<=7;$i++)
	{
		if($subject[$row['choice_'.$i]]!=0 && $row['QUOTA']=='WQ' && $row['selected_subject']==NULL && $row['flag']==2)
		{
			$stmt= $conn->prepare("update posted_data set selected_subject='".$row['choice_'.$i]."',flag=3 where MERIT=$d and UNIT='A'");
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
	try{
		
	$subject2=array("B.Sc in Agriculture (Honours) [B.Sc.Ag. (Hons.)]","B.Sc in Disaster Management (Honours) [B.Sc. DM. (Hons.)]","B.Sc in Nutrition and Food Science (Honours) [B.Sc. NFS . (Hons.)]","B.Sc in Fisheries (Honours) [B.Sc. Fisheries (Hons.)]","Doctor of Veterinary Medicine (DVM)","B.Sc in Animal Husbandry B.Sc. Animal (Honours) [ B. Sc AH (Hons.)]","B.Sc in Land Management and Administration (Honours) [ B. Sc LMA(Hons.) ]");
	$subject=array();
	$quota="HDQ";
	$i=0;
	foreach($conn->query("select HDQ from seat_data order by id ASC") as $row) {
	$subject[$subject2[$i]]=$row['HDQ'];
	$i++;
	
    }
	$subject['']=0;
   }
   catch(PDOException $e)
    {
    echo 'Error: ' . $e->getMessage();
    }
	try{
		
	
	foreach($conn->query("SELECT * FROM posted_data WHERE UNIT='A' order by MERIT ASC") as $row) {
    #echo $row['l1'].' '.$row['l2'].' '.$row['l3'].' '.$row['l4'];
	$d=$row['MERIT'];
	for($i=1;$i<=7;$i++)
	{
		if($subject[$row['choice_'.$i]]!=0 && $row['QUOTA']=='HDQ' && $row['selected_subject']==NULL && $row['flag']==2)
		{
			$stmt= $conn->prepare("update posted_data set selected_subject='".$row['choice_'.$i]."',flag=3 where MERIT=$d and UNIT='A'");
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
	try{
		
	$subject2=array("B.Sc in Agriculture (Honours) [B.Sc.Ag. (Hons.)]","B.Sc in Disaster Management (Honours) [B.Sc. DM. (Hons.)]","B.Sc in Nutrition and Food Science (Honours) [B.Sc. NFS . (Hons.)]","B.Sc in Fisheries (Honours) [B.Sc. Fisheries (Hons.)]","Doctor of Veterinary Medicine (DVM)","B.Sc in Animal Husbandry B.Sc. Animal (Honours) [ B. Sc AH (Hons.)]","B.Sc in Land Management and Administration (Honours) [ B. Sc LMA(Hons.) ]");
	$subject=array();
	$quota="FWQ";
	$i=0;
	foreach($conn->query("select FWQ from seat_data order by id ASC") as $row) {
	$subject[$subject2[$i]]=$row['FWQ'];
	$i++;
	
    }
	$subject['']=0;
   }
   catch(PDOException $e)
    {
    echo 'Error: ' . $e->getMessage();
    }
	try{
		
	
	foreach($conn->query("SELECT * FROM posted_data WHERE UNIT='A' order by MERIT ASC") as $row) {
    #echo $row['l1'].' '.$row['l2'].' '.$row['l3'].' '.$row['l4'];
	$d=$row['MERIT'];
	for($i=1;$i<=7;$i++)
	{
		if($subject[$row['choice_'.$i]]!=0 && $row['QUOTA']=='FWQ' && $row['selected_subject']==NULL && $row['flag']==2)
		{
			$stmt= $conn->prepare("update posted_data set selected_subject='".$row['choice_'.$i]."',flag=3 where MERIT=$d and UNIT='A'");
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
	try{
		
	$subject2=array("B.Sc in Agriculture (Honours) [B.Sc.Ag. (Hons.)]","B.Sc in Disaster Management (Honours) [B.Sc. DM. (Hons.)]","B.Sc in Nutrition and Food Science (Honours) [B.Sc. NFS . (Hons.)]","B.Sc in Fisheries (Honours) [B.Sc. Fisheries (Hons.)]","Doctor of Veterinary Medicine (DVM)","B.Sc in Animal Husbandry B.Sc. Animal (Honours) [ B. Sc AH (Hons.)]","B.Sc in Land Management and Administration (Honours) [ B. Sc LMA(Hons.) ]");
	$subject=array();
	$quota="BKSP";
	$i=0;
	foreach($conn->query("select BKSP from seat_data order by id ASC") as $row) {
	$subject[$subject2[$i]]=$row['BKSP'];
	$i++;
	
    }
	$subject['']=0;
   }
   catch(PDOException $e)
    {
    echo 'Error: ' . $e->getMessage();
    }
	try{
		
	
	foreach($conn->query("SELECT * FROM posted_data WHERE UNIT='A' order by MERIT ASC") as $row) {
    #echo $row['l1'].' '.$row['l2'].' '.$row['l3'].' '.$row['l4'];
	$d=$row['MERIT'];
	for($i=1;$i<=7;$i++)
	{
		if($subject[$row['choice_'.$i]]!=0 && $row['QUOTA']=='BKSP' && $row['selected_subject']==NULL && $row['flag']==2)
		{
			$stmt= $conn->prepare("update posted_data set selected_subject='".$row['choice_'.$i]."',flag=3 where MERIT=$d and UNIT='A'");
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
	try{
		
	$subject2=array("B.Sc in Agriculture (Honours) [B.Sc.Ag. (Hons.)]","B.Sc in Disaster Management (Honours) [B.Sc. DM. (Hons.)]","B.Sc in Nutrition and Food Science (Honours) [B.Sc. NFS . (Hons.)]","B.Sc in Fisheries (Honours) [B.Sc. Fisheries (Hons.)]","Doctor of Veterinary Medicine (DVM)","B.Sc in Animal Husbandry B.Sc. Animal (Honours) [ B. Sc AH (Hons.)]","B.Sc in Land Management and Administration (Honours) [ B. Sc LMA(Hons.) ]");
	$subject=array();
	$quota="PDQ";
	$i=0;
	foreach($conn->query("select PDQ from seat_data order by id ASC") as $row) {
	$subject[$subject2[$i]]=$row['PDQ'];
	$i++;
	
    }
	$subject['']=0;
   }
   catch(PDOException $e)
    {
    echo 'Error: ' . $e->getMessage();
    }
	try{
		
	
	foreach($conn->query("SELECT * FROM posted_data WHERE UNIT='A' order by MERIT ASC") as $row) {
    #echo $row['l1'].' '.$row['l2'].' '.$row['l3'].' '.$row['l4'];
	$d=$row['MERIT'];
	for($i=1;$i<=7;$i++)
	{
		if($subject[$row['choice_'.$i]]!=0 && $row['QUOTA']=='PDQ' && $row['selected_subject']==NULL && $row['flag']==2)
		{
			$stmt= $conn->prepare("update posted_data set selected_subject='".$row['choice_'.$i]."',flag=3 where MERIT=$d and UNIT='A'");
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
	
	
	$stmt= $conn->prepare("update posted_data set flag=4 where flag=1");
	$stmt->execute();

    
	$stmt= $conn->prepare("update posted_data set selected_subject='B.Sc in CSE (Engineering) [B.Sc.CSE. (Engg.)]' where UNIT='C'");
	$stmt->execute();
	
	$stmt= $conn->prepare("update posted_data set selected_subject='BBA in Bussiness Administration & Management' where UNIT='B'");
	$stmt->execute();
	
 echo "<h5> Successfully subject migration completed!!! </h5>";
 
?>
<?php

include('../includes/sidenav.php');
include('../includes/footer.php');


?>