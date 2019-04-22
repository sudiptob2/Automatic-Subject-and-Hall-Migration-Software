
<?php
include('../Fpdf/mc_table.php');
include('../database/config.php');
$pdf=new PDF_MC_Table();

try{
		
	
	 foreach($conn->query("SELECT COUNT(*) FROM `exam_center_data`")as $row2){
		 $c=$row2['COUNT(*)'];
	 }
	 $prev=-1;
		$count=1;
		foreach($conn->query("SELECT t1.Roll,t1.Name,t2.center,t2.room_no,t2.hall_no,t2.unit,t2.total_student,t2.start_roll,t2.end_roll FROM student_data as t1 INNER JOIN exam_center_data as t2 where t1.Roll BETWEEN t2.start_roll and t2.end_roll") as $row) {
			
               
               if($prev!=$row['hall_no'])
			   {
					$pdf->AddPage();
					$pdf->header2($row['hall_no'],$row['center'],$row['unit'],$row['start_roll'],$row['end_roll'],$row['room_no'],$row['total_student']);
					$pdf->Ln(5);
					$pdf->SetWidths(array(10,32,55,32,32,32));
					$pdf->SetFont('times','B',14);
					$pdf->Row(array('SL No.', 'Roll', 'Name', 'OMR Serial','Student Signature','Invigilator Signature'));
					$pdf->SetFont('times','',14);
					$prev=$row['hall_no'];
					$count=1;
			   }
			   
			   $pdf->Row(array($count,$row['Roll'],$row['Name'],"","",""));
			
				$count++;
	}
	
	
	
}
catch(PDOException $e)
{
    echo 'Error: ' . $e->getMessage();
}
	
    
$pdf->Output();

?>