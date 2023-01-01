<?php  
require "vendor/autoload.php";
use Fpdf\Fpdf;

$fullname = $_GET['fullname']??null;



$pdf = new FPDF('L','pt','A4'); 



$pdf->AddPage(); 
//  Print the edge of
$pdf->Image("bg1.png", 20, 20, 780); 
// Print the certificate logo  
$pdf->Image("inno_logo1.png", 85, 65, 100, 100); 

$pdf->SetFont('Times','',80); 
$pdf->Cell(700,200,"CERTIFICATE",0,0,'R'); 


$pdf->SetFont('Arial','I',34); 
$pdf->SetXY(250,220); 
$pdf->Cell(350,25,$fullname,"B",0,'C',0); 
 

$pdf->SetFont('Arial','I',14); 
$pdf->SetXY(270,280); 
$message = "This Certificate is given on this month of January on Completion of Licensure Examination for Teachers"; 
$pdf->MultiCell(300,14,$message,0,'C',0); 


$pdf->SetFont('Arial','I',18); 
$pdf->SetXY(390,440); 
$pdf->Cell(350,25,"Jello Mangune","B",0,'C',0); 

$pdf->SetFont('Arial','B',16); 
$pdf->SetXY(490,470); 
$pdf->Cell(350,19,"Officer-in-Charge",0,'C'); 


$pdf->Output(); 
?> 