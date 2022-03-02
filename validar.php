<?php
include('AdminBDD/Conexion.php.php');
include('Index.php');
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];
session_start();
$_SESSION['usuario']=$usuario;



$conn  = new mysqli($serverName, $userName, $password, $dbname);
$consulta="SELECT*FROM usuarios where usuario='$usuario' and clave='$clave'";
$resultado=mysqli_query($conn,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:index.php");

}else{
    ?>
    <?php
    include("index.php");

  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conn);