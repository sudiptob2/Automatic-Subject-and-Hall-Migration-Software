<?php
require('../fpdf/fpdf.php');

class PDF_MC_Table extends FPDF
{
var $widths;
var $aligns;
function SetWidths($w)
{
	//Set the array of column widths
	$this->widths=$w;
}
function header2($unit)
{
    
    // Move to the right
   // $this->Cell(80);
    // Title
	//$this->Cell(50);
	$this->SetFont('times','B',22);
	$this->Cell(200,10,'Selected Student List',0,0,'C');
	$this->Ln(15);
	$this->SetFont('times','B',14);
	$this->Cell(200,5,'Unit : '.$unit,0,0,'C');
	$this->Ln(10);
	$this->Line(1,40,250,40);
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
					$this->SetWidths(array(15,20,30,55,25,48));
					$this->SetFont('times','B',14);
					//Table with 20 rows and 4 columns

					//Header
					$this->Row(array('SL No.', 'Merit', 'Roll', 'Name', 'Migrated Subject','Migrated Hall'));
					$this->SetFont('times','',12);
	

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
