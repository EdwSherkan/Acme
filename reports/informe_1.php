<?php

include ('../connection/connection.php');
require ('../lib_pdf\fpdf.php');

$docCliente = $_POST['clienteinfo'];


class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('../imagenes\logo.png',10,5,15);
    // Arial bold 15
    $this->SetFont('Arial','B',19);
    // Margen izquierda
    $this->Cell(60);
    // Título
    $this->Cell(10,5,'Vehicle History Administration',0,0,'C');
    $this->Ln(20);

    $this->SetFont('Arial','B',12);
    $this->Cell(30,10,'Propietarios',0,0,'l');
    $this->SetFont('Arial','',9);
    $this->Cell(160,10,date('Y-m-d'),0,0,'R');
    $this->Ln(20); 
    
}

// Pie de página
function Footer()
{
    $this->SetTextColor(0,0,0);
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

$mostrar = "SELECT id_propietario, concat(Pnomb_propietario,' ',Snomb_propietario,' ',apell_propietario) 
AS Nombre, dir_propietario,tel_propietario,ciudad_propietario
FROM propietarios
WHERE id_propietario = '$docCliente'";

$mVehiculo = "SELECT id_vehiculo, color_vehiculo, marca_vehiculo, tipo_vehiculo, 
concat(conductores.Pnomb_conductor,' ',conductores.apell_conductor) as Conductor
FROM vehiculos
inner join conductores
on vehiculos.idcond_vehiculo = conductores.id_conductor
WHERE idprop_vehiculo = '$docCliente'";

$resultado = $conexion->query($mostrar);


$pdf = new PDF('P','mm','letter' );
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','',10);

while($row = $resultado->fetch_assoc()){  

    $pdf->Cell(30,10,'Documento:',0,0,'l');
    $pdf->cell(80, 10, $row["id_propietario"], 0, 0, 'L', 0 );
    $pdf->Ln(5); 

    $pdf->Cell(30,10,'Nombre:',0,0,'l');
    $pdf->cell(80, 10, utf8_decode($row['Nombre']), 0, 0, 'L', 0 );
    $pdf->Ln(5);

    $pdf->Cell(30,10,'Direccion:',0,0,'l');
    $pdf->cell(80, 10, $row['dir_propietario'], 0, 0, 'L', 0 );
    $pdf->Ln(5); 

    $pdf->Cell(30,10,'Telefono:',0,0,'l');
    $pdf->cell(80, 10, $row['tel_propietario'], 0, 0, 'L', 0 );
    $pdf->Ln(5); 

    $pdf->Cell(30,10,'Ciudad:',0,0,'l');
    $pdf->cell(80, 10, utf8_decode( $row['ciudad_propietario']), 0, 1, 'L', 0 );
    $pdf->Ln(20); 
}
$pdf->SetFont('Arial','B',11);
$result = $conexion->query($mVehiculo);
$pdf->Line(20, 100, 200, 100); 
$pdf->Line(20, 110, 200, 110); 
$pdf->Cell(35,10,'Placa',0,0,'C');
$pdf->Cell(35,10,'Color',0,0,'C');
$pdf->Cell(35,10,'Marca',0,0,'C');
$pdf->Cell(35,10,'Tipo',0,0,'C');
$pdf->Cell(35,10,'Conductor',0,0,'C');
$pdf->Ln(9); 

while($row = $result->fetch_assoc()){ 
    $pdf->SetTextColor(0,50,250);
    $pdf->SetFont('Arial','',10);

$pdf->cell(35, 10, $row["id_vehiculo"], 0, 0, 'C', 0 );
$pdf->cell(35, 10, $row["color_vehiculo"], 0, 0, 'C', 0 );
$pdf->cell(35, 10, $row["marca_vehiculo"], 0, 0, 'C', 0 );
$pdf->cell(35, 10, $row["tipo_vehiculo"], 0, 0, 'C', 0 );
$pdf->cell(35, 10, $row["Conductor"], 0, 0, 'C', 0 );
$pdf->Ln(5);

}
$pdf->Output();

?>