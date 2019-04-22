<?php
require('fpdf.php');

class PDF_MC_Table extends FPDF
{
var $widths;
var $aligns;
function SetWidths($w)
{
	//Set the array of column widths
	$this->widths=$w;
}
function header2($hall_no,$center,$Unit,$start_roll,$end_roll,$room_no,$total_student)
{
    
    // Move to the right
   // $this->Cell(80);
    // Title
	$this->SetFont('times','',24);
	$this->Cell(20,12,'Hall',0,0,'C');
	$this->Cell(50);
	$this->SetFont('times','B',24);
	$this->Cell(50,10,'PSTU Admission Test 2017-18',0,0,'C');
	$this->Cell(46);
	$this->Cell(35,12,'Unit - '.$Unit,0,0,'C');
	$this->SetFont('times','B',26);
    $this->Ln(12);
	$this->Cell(2);
	$this->SetFont('times','',28);
	$this->Cell(15,15,$hall_no,1,0,'C');
	$this->Ln(2);
	
	$this->Cell(17);
	$len=strlen($center);
	$arr=explode(" ",$center);
	$str1="";
	$str2="";
	$flag=true;
	for($i=0;$i<count($arr);$i++)
	{
		if(strlen($str1.$arr[$i])<=45 && $flag==true)
		{
			$str1=$str1.$arr[$i]." ";
		}
		else
		{
			$flag=false;
			$str2=$str2.$arr[$i]." ";
		}
	}
	$this->SetFont('times','B',14);
	$this->Cell(25,1,'Center:',0,0,'C');
	$this->SetFont('times','IU',14);
	//$this->Cell(40);
	$this->Cell(30,1,$str1,0,0,'L');
    $this->Ln(5);
	$this->Cell(82);
	$this->Cell(30,1,$str2,0,0,'L');
	
	$this->Ln(8);
	$this->Cell(20);
	$this->SetFont('times','B',14);
	$this->Cell(34,1,'Room Number: ',0,0,'L');
	$this->SetFont('times','',12);
	$this->Cell(30,1,$room_no,0,0,'L');
	$this->SetFont('times','B',14);
	$this->Cell(26,1,'Roll Range: ',0,0,'L');
	$this->SetFont('times','',12);
	$this->Cell(35,1,$start_roll."-".$end_roll,0,0,'L');
	$this->SetFont('times','B',14);
	
	$this->Cell(34,1,'No. of students:',0,0,'L');
	$this->SetFont('times','',12);
	$this->Cell(0,1,$total_student,0,0,'L');
	

	$this->Line(1,45,250,45);
	$this->SetLineWidth(.2);
	$this->Ln(10);

}
function SetAligns($a)
{
	//Set the array of column alignments
	$this->aligns=$a;
}

function Row($data)
{
	//Calculate the height of the row
	$nb=0;
	for($i=0;$i<count($data);$i++)
		$nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
	$h=5*$nb+5;
	//Issue a page break first if needed
	$this->CheckPageBreak($h);
	//Draw the cells of the row
	for($i=0;$i<count($data);$i++)
	{
		$w=$this->widths[$i];
		$a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
		//Save the current position
		$x=$this->GetX();
		$y=$this->GetY();
		//Draw the border
		$this->Rect($x,$y-2,$w,$h);
		//Print the text
		$this->MultiCell($w,5,$data[$i],0,'C');
		//Put the position to the right of the cell
		$this->SetXY($x+$w,$y);
	}
	//Go to the next line
	$this->Ln($h);
}

function CheckPageBreak($h)
{
	//If the height h would cause an overflow, add a new page immediately
	if($this->GetY()+$h>$this->PageBreakTrigger){
		$this->AddPage($this->CurOrientation);
		$this->Ln(5);
					$this->SetWidths(array(10,32,55,32,32,32));
					$this->SetFont('times','B',14);
					//Table with 20 rows and 4 columns

					//Header
					$this->Row(array('SL No.', 'Roll', 'Name', 'OMR Serial','Student Signature','Invigilator Signature'));
					$this->SetFont('times','',14);
	

}
}

function NbLines($w,$txt)
{
	//Computes the number of lines a MultiCell of width w will take
	$cw=&$this->CurrentFont['cw'];
	if($w==0)
		$w=$this->w-$this->rMargin-$this->x;
	$wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
	$s=str_replace("\r",'',$txt);
	$nb=strlen($s);
	if($nb>0 and $s[$nb-1]=="\n")
		$nb--;
	$sep=-1;
	$i=0;
	$j=0;
	$l=0;
	$nl=1;
	while($i<$nb)
	{
		$c=$s[$i];
		if($c=="\n")
		{
			$i++;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
			continue;
		}
		if($c==' ')
			$sep=$i;
		$l+=$cw[$c];
		if($l>$wmax)
		{
			if($sep==-1)
			{
				if($i==$j)
					$i++;
			}
			else
				$i=$sep+1;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
		}
		else
			$i++;
	}
	return $nl;
}
}
?>
