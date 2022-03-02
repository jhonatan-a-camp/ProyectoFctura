<?php
include("Plantillas/Encabezado.php");
include("Admin/BDD/Conexion.php");

$sql = "Select * from usuarios;";
$result = $conn->query($sql);

//  header("Location: Login.php");

?>
<div class="container">
    <div class="row">
        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-inverse">
                <tr>

                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>APELLIDO</th>
                    <th>USUARIO</th>
                    <th>CONTRASEÑA</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($r = $result->fetch_assoc()) { ?>
                    <tr>

                    
                        <td><?php echo $r['idu']; ?></td>
                        <td><?php echo $r['nombres']; ?></td>
                        <td><?php echo $r['apellidos']; ?></td>
                        <td><?php echo $r['usuario']; ?></td>
                        <td><?php echo $r['clave']; ?></td>

                        <td>
                            <form action="crudregistro.php" method="POST">
                                <input type="hidden" name="idu" value="<?php echo $r['idu']; ?>">
                                <button type="submit" class="btn btn-danger" name="Enviar" value="Eliminar">Eliminar</button>
                            </form>
                        </td>

                 
                    </tr>
                <?php
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
</div>
<?php include("Plantillas/pie.php") ?>