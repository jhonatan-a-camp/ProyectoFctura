<?php 
include("Admin/BDD/Conexion.php");


$sql = "select * from productos ";
    $result = $conn->query($sql);
    header('Content_type: aplication/vnd.ms-excel;charset=UTF_8');
    header('Content-Disposition:attachment;filename=reporte_archivo.xls');
    
    echo "<table border='1' cellpadding='2' cellspacing='0' width='100%'>";  
    echo"<tr><td>id</td><td>Nombre</td><td>Marca</td><td>Detalle</td><td>Precio</td><td>tock</td><td>Foto</td></tr>";
while($row = $result->fetch_assoc()){
    $id = $row["id"];
    $nombre = $row["nombre"];
    $marca = $row["marca"];
    $detalle = $row["detalle"];
    $precio = $row["precio"];
    $stock = $row["stock"];
    $foto = $row["foto"];

    echo"<tr><td>$id</td><td>$nombre</td><td>$marca</td><td>$detalle</td><td>$$precio</td><td>$stock</td><td>$foto</td></tr>";
}