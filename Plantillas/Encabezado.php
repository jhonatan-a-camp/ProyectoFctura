<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <script src="js/bootstrap.bundle.min.js"></script>
    <title>Tienda Online</title>

</head>

<body style="background: url(folder/fondo.jpg)no-repeat;background-size:cover">


    <!--menu-->

    <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">TIENDA ONLINE</a>
            <ul class="navbar-nav">
               

                <li class="nav-item">
                    <div class="btn-group">
                        <button type="button" class="btn btn-success">Productos</button>
                        <button type="button" class="btn btn-success dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">
 
                            <li><a class="dropdown-item" href="formularioproduc.php">Ingresar</a></li>
                            <li><a class="dropdown-item" href="tablaproductos.php">Tabla</a></li>

                        </ul>
                    </div>

                </li>
-
            
                <li class="nav-item">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Clientes</button>
                        <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item" href="formulariocliente.php ">Ingresar</a></li>
                            <li><a class="dropdown-item" href="tablacliente.php">Tabla</a></li>

                        </ul>
                    </div>
                </li>
-
                <li class="nav-item">
                    <div class="btn-group">
                        <button type="button" class="btn btn-warning">Usuarios</button>
                        <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">

                        
                            <li><a class="dropdown-item" href="tablausuario.php">Tabla</a></li>

                        </ul>
                    </div>
                </li>
-
                <li class="nav-item">
                    <div class="btn-group">
                        <button type="button" class="btn btn-danger">x</button>
                        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu">

                            <li><a class="dropdown-item" href="index.php ">Regresar</a></li>
                            <li><a class="dropdown-item" href="login.php">Salir</a></li>

                        </ul>
                    </div>
                </li>
-
                
            </ul>
        </div>

    </nav>
    <br>