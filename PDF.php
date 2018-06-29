<?php

require('model/fpdf/fpdf.php');
class PDF extends FPDF
{
    
    function Header()
    {
        $this->SetFont('Arial','B',15);
        $this->Cell(35);
        $this->Cell(140,10,'Reporte de ingreso',0,0,'C');
        
        $this->Ln(20);
    }

    function Footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial','I',8);
        $this->Cell(0,10,'ParkinkKontrol','/{nb}','T',0,'C');
    }
  }
  ?>

