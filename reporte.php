<?php
include "plantilla.php";

$pdf = new PDF("P", "mm", "A4");

$pdf->AddPage();

$pdf->Ln();
$pdf->Ln(30);
$pdf->setFont("helvetica", "", 13);
$pdf->Cell(190, 10, "RENOVACIÓN DE MATRICULA PARA EL AÑO 2013", 0, 1, "C");

$pdf->setFont("helvetica", "", 10);
$pdf->Cell(21, 10, "Nombre: ", 1);
$pdf->Cell(90, 10, "Adriana Ivonne Catañeda Rincon ", 1);
$pdf->Cell(15, 10, "Grado: ", 1);
$pdf->Cell(35, 10, "Decimo: ", 1, 1);

// $pdf->Image("imagenes/cara2.JPG",16,3);
$pdf->Image('imagenes/cara2.JPG"', 171, 50, 30, 30, '', '', 1, false, 300, '', false, false, 1, false, false, false,);


$pdf->setFont("helvetica", "", 10);
$txt = "Lugar de Nacimiento:";
$pdf->MultiCell(21, 10, $txt, 1, 'L', 0, 0, '', '', true);
$pdf->Cell(90, 10, "Bogota", 1);
$pdf->Cell(15, 10, "Fecha: ", 1);
$pdf->Cell(35, 10, "30/Noviembre/1899", 1, 1);

$pdf->setFont("helvetica", "", 10);
$pdf->Cell(21, 10, "Documento: ", 1);
$pdf->Cell(70, 10, "Tarjeta de identidad", 1);
$pdf->Cell(20, 10, "753434 ", 1);
$pdf->Cell(15, 10, "Genero:", 1);
$pdf->Cell(35, 10, "Femenino", 1, 1);



$pdf->setFont("helvetica", "", 10);
$pdf->Cell(21, 10, "Direccion: ", 1);
$pdf->Cell(170, 10, "Calle 20 # 6 -88 DUITAMA BOYACA", 1, 1);

$pdf->setFont("helvetica", "", 10);
$pdf->Cell(21, 10, "EPS: ", 1);
$pdf->Cell(90, 10, "E.P.S FAMISANAR LTDA", 1);
$pdf->Cell(15, 10, "Estrato: ", 1);
$pdf->Cell(15, 10, "3: ", 1);
$pdf->Cell(20, 10, "Tel:141242 ", 1);
$pdf->Cell(30, 10, "R.H: O+: ", 1, 1);

$pdf->Ln();
$pdf->Ln(10);

$pdf->setFont("helvetica", "", 13);
$pdf->Cell(190, 10, "INFORMACIÓN DE ACUDIENTE", 0, 1, "C");

$pdf->setFont("helvetica", "", 10);
$pdf->Cell(21, 10, "Nombre: ", 1);
$pdf->Cell(122, 10, "Jorge Ernesto Castañeda Ferrer", 1);
$pdf->Cell(22, 10, "Parentesco: ", 1);
$pdf->Cell(25, 10, "Padre", 1, 1);

$pdf->setFont("helvetica", "", 10);
$pdf->Cell(21, 10, "Documento: ", 1);
$pdf->Cell(97, 10, "CC: CEDULA DE CIUDADANIA", 1);
$pdf->Cell(25, 10, "32132131", 1);
$pdf->Cell(22, 10, "Duitama", 1);
$pdf->Cell(25, 10, "Boyaca", 1, 1);

$pdf->setFont("helvetica", "", 10);
$pdf->Cell(21, 10, "Direccion: ", 1);
$pdf->Cell(97, 10, "Calle20 # 6-88", 1);
$pdf->Cell(25, 10, "Ciudad: ", 1);
$pdf->Cell(22, 10, "Duitama", 1);
$pdf->Cell(10, 10, "Tel:", 1);
$pdf->Cell(15, 10, "762232", 1, 1);

$txt = "Me comprometo a cumplir todas las normas del manual de convicencia";
$pdf->MultiCell(115, 10, $txt, 0, 'J', 0, 1, '', '', true);

$pdf->Ln();
$pdf->Ln(20);
$pdf->Cell(190, 10, "                      ___________________________                                         ___________________________     ", 0, 1);
$pdf->Cell(190, 10, "                                      ACUDIENTE                                                                            ESTUDIANTE", 0, 1);

$pdf->Ln();
$pdf->Cell(190, 10, "                      ___________________________                                         ___________________________     ", 0, 1);
$pdf->Cell(190, 10, "                                      ACUDIENTE                                                                            ESTUDIANTE", 0, 0);

$pdf->Output("reporte.php");
