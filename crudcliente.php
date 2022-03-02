<?php
include("Admin/BDD/Conexion.php");

if (isset($_POST["Enviar"]) && $_POST["Enviar"] === "Guardar") {
    
    $id = $_POST['id'];
    $nombres = $_POST['nombre'];
    $apellidos = $_POST['apellido'];
    $usr = $_POST['usr'];
    //$pwd = $_POST['pwd'];
    $pwd= hash("sha256",md5($_POST["pwd"]));
    $fechas = $_POST['fnacimiento'];
    $detalles = $_POST['detalle'];
    
    
    
    if (empty($id)) {
        $sql = "insert into clientes(id,nombre,apellido,usr,pwd,fnacimiento,detalle)
    values ('$id','$nombres','$apellidos','$usr','$pwd','$fechas','$detalles');";
    } else {
       
     $sql ="update clientes SET  nombre='$nombres',apellido='$apellidos',usr='$usr',pwd='$pwd',fnacimiento='$fechas',detalle='$detalles' WHERE id='$id'; ";
    }

    if ($conn->query($sql)) {
        echo "Datos guardados correctamente";
    } else {
        echo " Error al guardar";
    }

    $conn->close();
} else if (isset($_POST["Enviar"]) && $_POST["Enviar"] === "Eliminar") {
    $id = $_POST["id"];
    $sql = "delete from clientes where id=$id";
    if ($conn->query($sql)) {
        echo "Datos eliminados correctamente";
    } else {
        echo "Error al eliminar";
    }
    $conn->close();
}