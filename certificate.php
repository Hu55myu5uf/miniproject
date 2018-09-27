<?php

$id =NULL;
require('fpdf/fpdf.php');

$pdf = new FPDF('p','mm','A4');  

$pdf->AddPage();

$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

    $pdf->Cell(190,10,$id,1,1,'C');






$pdf->Output();
?>