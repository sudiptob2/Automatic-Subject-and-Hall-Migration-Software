
<?php
include('mc_table2.php');
include('../database/config.php');
$pdf=new PDF_MC_Table();
if(isset($_POST['selected_text']))
{
	$hall=$_POST['selected_text'];
}
try{
	 $prev=-1;
		$count=1;
		
		foreach($conn->query("select UNIT,XROLL,MERIT,NAME,selected_subject,selected_hall from posted_data order by merit ASC") as $row) {
			
               if($prev==-1)
			   {
				   $pdf->AddPage();
				   $pdf->header2($hall);
				   $prev++;
				   $pdf->Ln(5);
					$pdf->SetWidths(array(15,20,25,55,30,48));
					$pdf->SetFont('times','B',14);
					$pdf->Row(array('SL No.', 'Merit', 'Roll', 'Name', 'Migrated Subject','Migrated Hall'));
					$pdf->SetFont('times','',12);
					//$prev=$row['hall_no'];
			   }
			   if($row['selected_hall']==$hall)
			   {
					#$pdf->AddPage();
					
					//$count=1;
					$pdf->Row(array($count,$row['MERIT'],$row['XROLL'],$row['NAME'],$row['selected_subject'],$row['selected_hall']));
					$count++;
			   }
			   
			   
			
				
	}
	
	
	
}
catch(PDOException $e)
{
    echo 'Error: ' . $e->getMessage();
}
	
    
$pdf->Output();

?>