<?php 
   
    include '../header.php';
    if ((!isset($_SESSION['accesoAdmin'])) || ($_SESSION['accesoAdmin'] === 0) ) {
        echo '
            <div class="main d-flex justify-content-center align-items-center">
                <p>No tiene permisos para acceder a esta area</p>
            </div>
        ';
        return;     
        }

    //Conexion con base de datos
    require '../../database/db_connect.php';
    $mysqli = conectar();

    // Consulta
    $resultado = $mysqli->query("SELECT * FROM Usuario WHERE id=".$_GET["id"]);
    $reg=$resultado->fetch_assoc();

    //Muestra Datos
    if ($reg['accesoAdmin'] == 0) {

        $reg['accesoAdmin'] = "No";

    } else {

        $reg['accesoAdmin'] = "Si";

    }

    echo '
        <div class="main d-flex justify-content-center align-items-center">
            <div class="card">
                <h5 class="card-header bg-dark text-white-50">Detalle de ' . ($_GET["nombre"]) . '</h5>
                <div class="card-body d-flex flex-column p-4 bg-light">
                    <ul>
                        <li>Id: '.$reg['id'].'</li>
                        <li>Nombre: '.$reg['nombre'].'</li>
                        <li>Email: '.$reg['email'].'</li>
                        <li>Admin: '.$reg['accesoAdmin'].'</li>
                    </ul>
                    <a class="btn red" href="./mostrarUsuarios.php">Volver</a>
                </div>
            </div>
        </div>
    ';

?>