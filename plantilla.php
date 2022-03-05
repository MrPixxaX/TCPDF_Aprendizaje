<?php
    include_once "../pruebapdf2/TCPDF-main/examples/tcpdf_include.php";

    class PDF extends TCPDF{

        public function header(){
            $this->Image("imagenes/cara.JPG",10,3,26);
            $this->setFont("helvetica","B",15);
            $this->Cell(190,3,"COLPRUEBAS",0,1,"C");

            $this->setFont("helvetica","B",10);
            $this->Cell(190,3,"Ciencia - Virtud - Disciplina",0,1,"C");
            $this->setFont("helvetica","B",8);
            $this->Cell(190,3,"Codigo dane 80000002 -  resolucion 2321 del 23 de febrero del 2010",0,1,"C");
            $this->Cell(190,3,"Calle 14 nrp 23 cel: 231344523 telfecr 2321322214",0,1,"C");
            $this->setFont("helvetica","B",13);
            $this->Cell(190,3,"Hoja de Matricula",0,1,"C");
            $this->setFont("helvetica","B",8);
            $this->Cell(190,3,"Calle 15 nro 10 - 54 tels: cell 3223453534 Telfax: 123123 -  DANE : 8999921321",0,1,"C");
            $this->Cell(190,3,"Resolucion: 987256 dek 23 de febrero del 2010",0,1,"C");
            $this->Ln();
        }

        public function Footer(){
            $this->SetY(-15);
            // Set font
            $this->SetFont('helvetica', 'I', 8);
            // Page number
            $this->Cell(0, 10, 'Page '.$this->getAliasNumPage().'/'.$this->getAliasNbPages(), 0, false, 'C', 0, '', 0, false, 'T', 'M');
        }


    }

    
?>
