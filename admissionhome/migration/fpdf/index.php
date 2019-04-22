<?php
require('fpdf.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Times','',16);
$psc='<h1>error</h1>';
$pdf->Cell(40,5,$psc);
$pdf->Output();
?>
