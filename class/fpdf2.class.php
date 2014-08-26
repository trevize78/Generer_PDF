<?php
/**
 * Created by PhpStorm.
 * User: Admin Stagiaire
 * Date: 26/08/14
 * Time: 11:18
 */

class FPDF2 extends FPDF{

//parent::FPDF();

    function Header()
    {
        // To be implemented in your own inherited class
        $this->Image('images/logo.gif',10,6,30);
        // Police Arial gras 15
        $this->SetFont('Arial','B',15);
        // Décalage à droite
        $this->Cell(80);
        // Titre
        $this->Cell(30,10,'Titre',1,0,'C');
        // Saut de ligne
        $this->Ln(20);
    }

    function Footer()
    {
        // Positionnement à 1,5 cm du bas
        $this->SetY(-15);
        // Police Arial italique 8
        $this->SetFont('Arial','IB',8);
        // Numéro et nombre de pages
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',"T",0,'C');
    }

} 