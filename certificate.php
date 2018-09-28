<?php



require('fpdf/fpdf.php');

$pdf = new FPDF('p','mm','A4');  

$pdf->AddPage();


    // Set font to Arial Bold 14pt 
    $pdf->SetFont('Times','B',15);
    //Cell(width , height , text , border , end line , [align] )
    $pdf->Cell(50,10,'Babyregister.com',0,1,'L');
    
    
    $pdf->SetFont('','',20);
    $pdf->Cell(190,10,'Federal Republic of Nigeria',0,1,'C');

    $pdf->SetFont('','B',20);
    $pdf->Cell(190,10,'National Population Commision',0,1,'C');


    $pdf->SetFont('','B',15);
    $pdf->Cell(190,10,'Birth Registration Form',0,1,'C');
    
    $pdf->Cell(190,10,'',0,1,'C');

    $pdf->SetFont('','B',15);
    $pdf->Cell(190,10,'PARTICULARS OF CHILD:',0,1,'');

    $pdf->SetFont('','B',13);
    $pdf->Cell(15,10,'Name:',0,0,'');
    $pdf->Cell(60,10,'',0,0,'');
    $pdf->Cell(60,10,'',0,0,'');
    $pdf->Cell(60,10,'',0,1,'');
    $pdf->Cell(30,10,'Date of Birth:',0,0,'');
    $pdf->Cell(50,10,'',0,0,'');
    $pdf->Cell(20,10,'Gender:',0,0,'');
    $pdf->Cell(50,10,'',0,1,'');
    $pdf->Cell(41,10,'Place of Occurance:',0,0,'');
    $pdf->Cell(50,10,'',0,0,'');
    $pdf->Cell(40,10,'Local Government:',0,0,'');
    $pdf->Cell(68,10,'',0,1,'');
    $pdf->Cell(15,10,'State:',0,0,'');
    $pdf->Cell(40,10,'',0,0,'');
    $pdf->Cell(47,10,'Weight After Delivery:',0,0,'');
    $pdf->Cell(35,10,'',0,0,'');
    $pdf->Cell(31,10,'Delivery Time:',0,0,'');
    $pdf->Cell(31,10,'',0,1,'');

    $pdf->Cell(190,10,'',0,1,'C');

    $pdf->SetFont('','B',15);
    $pdf->Cell(190,10,'PARTICULARS OF MOTHER:',0,1,'');

    $pdf->SetFont('','B',13);
    $pdf->Cell(15,10,'Name:',0,0,'');
    $pdf->Cell(60,10,'',0,0,'');
    $pdf->Cell(60,10,'',0,0,'');
    $pdf->Cell(60,10,'',0,1,'');
    $pdf->Cell(11,10,'Age:',0,0,'');
    $pdf->Cell(20,10,'',0,0,'');
    $pdf->Cell(32,10,'Marital Status:',0,0,'');
    $pdf->Cell(55,10,'',0,0,'');
    $pdf->Cell(25,10,'Nationality:',0,0,'');
    $pdf->Cell(55,10,'',0,1,'');
    $pdf->Cell(15,10,'State:',0,0,'');
    $pdf->Cell(60,10,'',0,0,'');
    $pdf->Cell(35,10,'Tribe/Ethnicity:',0,0,'');
    $pdf->Cell(60,10,'',0,1,'');
    $pdf->Cell(27,10,'Occupation:',0,0,'');
    $pdf->Cell(70,10,'',0,0,'');
    $pdf->Cell(35,10,'Phone Number:',0,0,'');
    $pdf->Cell(60,10,'',0,1,'');
    $pdf->Cell(43,10,'Residential Address:',0,0,'');
    $pdf->Cell(157,10,'',0,1,'');

    $pdf->Cell(190,10,'',0,1,'C');

    $pdf->SetFont('','B',15);
    $pdf->Cell(190,10,'PARTICULARS OF FATHER:',0,1,'');

    $pdf->SetFont('','B',13);
    $pdf->Cell(15,10,'Name:',0,0,'');
    $pdf->Cell(60,10,'',0,0,'');
    $pdf->Cell(60,10,'',0,0,'');
    $pdf->Cell(60,10,'',0,1,'');
    $pdf->Cell(11,10,'Age:',0,0,'');
    $pdf->Cell(20,10,'',0,0,'');
    $pdf->Cell(32,10,'Marital Status:',0,0,'');
    $pdf->Cell(55,10,'',0,0,'');
    $pdf->Cell(25,10,'Nationality:',0,0,'');
    $pdf->Cell(55,10,'',0,1,'');
    $pdf->Cell(15,10,'State:',0,0,'');
    $pdf->Cell(60,10,'',0,0,'');
    $pdf->Cell(35,10,'Tribe/Ethnicity:',0,0,'');
    $pdf->Cell(60,10,'',0,1,'');
    $pdf->Cell(27,10,'Occupation:',0,0,'');
    $pdf->Cell(70,10,'',0,0,'');
    $pdf->Cell(35,10,'Phone Number:',0,0,'');
    $pdf->Cell(60,10,'',0,1,'');
    $pdf->Cell(43,10,'Residential Address:',0,0,'');
    $pdf->Cell(157,10,'',0,1,'');
    
    $pdf->Cell(190,15,'',0,1,'C');

    $pdf->Cell(43,10,'Signature:',0,0,'');
    $pdf->Cell(70,10,'',0,0,'');

    $pdf->Cell(43,10,'Date Issued:',0,0,'');
    $pdf->Cell(40,10,'',0,0,'');
    

$pdf->Output();
?>