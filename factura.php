<?php

require("Admin/fpdf/fpdf.php");
session_start();
include("Admin/BDD/Conexion.php");
$Fpdf = new FPDF();
$Fpdf->AddPage();
$Fpdf->SetFont("Arial", "B", 30);
$Fpdf->Image("img/Productos/vida.png", 170, 5, 25, 25, "JPG");
$Fpdf->SetX(150);
$Fpdf->Sety(15);
$textypos = 5;
$Fpdf->Cell(50, 5, "", true . "$");
$Fpdf->Cell(5, $textypos, "Factura Online");
$Fpdf->Ln();
$Fpdf->Ln();
$Fpdf->Ln();
$Fpdf->SetFont("Arial", "I", 10);

//$Fpdf->SetTextColor(220,50,50); para el color de letra
$sql = "Select * from clientes;";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

$Fpdf->SetFont("Arial", "B", 14);
$Fpdf->Cell(30, 10, "Nombre:");
$Fpdf->SetFont("Arial", "I", 14);
$Fpdf->Cell(65, 10, $row["nombre"]);

$Fpdf->Cell(8, 5, "", true . "$");
$Fpdf->SetFont("Arial", "B", 14);
$Fpdf->Cell(30, 10, "Usuario:");
$Fpdf->SetFont("Arial", "I", 14);
$Fpdf->Cell(65, 10, $row["usr"]);
$Fpdf->Ln(5);
$Fpdf->SetFont("Arial", "B", 14);
$Fpdf->Cell(30, 10, "Apellido:");
$Fpdf->SetFont("Arial", "I", 14);
$Fpdf->Cell(65, 10, $row["apellido"]);


$Fpdf->Cell(8, 5, "", true . "$");
$Fpdf->SetFont("Arial", "B", 14);
$Fpdf->Cell(30, 10, "Fecha:");
$Fpdf->SetFont("Arial", "I", 14);
$fechaActual = date('d-m-Y');
$Fpdf->Cell(65, 10, $fechaActual);
$Fpdf->Ln();
$Fpdf->Ln();

// factura elements
$Fpdf->SetFont("Arial", "B", 14);
$Fpdf->Cell(40, 10, "PRODUCTO", true);
$Fpdf->Cell(90, 10, "CANTIDAD", true);
$Fpdf->Cell(25, 10, "PRECIO", true);
$Fpdf->Cell(25, 10, "IMPORTE", true);
$Fpdf->Ln();


foreach ($_SESSION["Carrito"] as $elemento) {
    $idp = $elemento["nombre"];
    $cantidad = $elemento["cantidad"];
    $precio = $elemento["precio"];
    $importe = $elemento["importe"];

    $Fpdf->Cell(40, 10, $idp, true);
    $Fpdf->Cell(90, 10, $cantidad, true);
    $Fpdf->Cell(25, 10, $precio, true);
    $Fpdf->Cell(25, 10, $importe, true);
    $Fpdf->Ln();
}

$Fpdf->Ln();
$Fpdf->SetFillColor(224, 235, 255);
$Fpdf->SetTextColor(0);
$Fpdf->SetFont("Arial", "B", 16);
$Fpdf->SetDrawColor(89, 154, 184);


//$Fpdf->SetLineWidth(.3);
$subtotal = 0;
$IVA = 0;
$aPagar = 0;
foreach ($_SESSION["Carrito"] as $elemento) {
    $subtotal += $elemento["importe"];
}
$Fpdf->SetDrawColor(0, 0, 0);
        $IVA = $subtotal * 0.12;
        $aPagar = $subtotal + $IVA;
        $Fpdf->Cell(105,7,"",true."$" );
        $Fpdf->Cell(40,7,"SUBTOTAL:",true,);
        $Fpdf->SetFont("Arial","I",14);
        $Fpdf->Cell(40,7,$subtotal,true,);
        $Fpdf->Ln();
        $Fpdf->SetFont("Arial","B",14);
        $Fpdf->Cell(105,7,"",true."$" );
        $Fpdf->Cell(40,7,"IVA",true);
        $Fpdf->SetFont("Arial","I",14);
        $Fpdf->Cell(40,7,$IVA,true);
        $Fpdf->Ln();
        $Fpdf->SetFont("Arial","B",14);
        $Fpdf->Cell(105,7,"",true."$" );
        $Fpdf->Cell(40,7,"TOTAL",true );
        $Fpdf->SetFont("Arial","I",14);
        $Fpdf->Cell(40,7,$aPagar,true);

$Fpdf->Output();
