<?php

require("connexion.php");

$pdf = new FPDF2();
$pdf->AliasNbPages();

$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->SetFillColor(247,185,185);
//$pdf->SetTextColor(255,255,255);
$pdf->Cell(50,50);
$pdf->Cell(40,50,'Hello World !',"LT",0,"C",true);

//$pdf->Cell(50,10,$pdf->PageNo());
//$pdf->Cell(50,50,$pdf->PageNo(),"LT");
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);
$txt = "FPDF est une classe PHP qui permet de générer des fichiers PDF en pur PHP, c'est-à-dire sans utiliser\nla librairie PDFlib. Le F de FPDF signifie Free : vous êtes libre de l'utiliser et de la modifier comme vous le souhaitez.";

$pdf->MultiCell(100,8,$txt,1,"J",true);

$pdf->Output();
?>