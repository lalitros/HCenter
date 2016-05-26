<?php

require('/home/bogar/Escritorio/PDFlib64/fpdf181/fpdf.php');

$pdf=new FPDF();
$filename = '/var/www/html/aws/Ordinario/lalitros.pdf';
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Mi primera pagina pdf con FPDF!');
$pdf->Output($filename,'F');
echo "listo!";
?>