<?php 
    include '../header.php';
    if ((!isset($_SESSION['accesoAdmin'])) || ($_SESSION['accesoAdmin'] !== 0) ) {
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
    $resultado = $mysqli->query("SELECT * FROM plato WHERE id=".$_GET["id"]);
    $reg=$resultado->fetch_assoc();

    //Muestra Datos

    echo '
        <div class="main d-flex justify-content-center align-items-center">
            <div class="card">
                <h5 class="card-header bg-dark text-white-50">Detalle de ' . ($_GET["titulo"]) . '</h5>
                <div class="card-body d-flex flex-column p-4 bg-light">
                    <ul>
                        <li class="m-1">Identificador: '.$reg['id'].'</li>
                        <li class="m-1">Nombre del plato: '.$reg['titulo'].'</li>
                        <li class="m-1">Numero de comensales: '.$reg['comensales'].'</li>
                        <li class="m-1">Tipo de Plato: '.$reg['tipo'].'</li>
                    </ul>
                    <a class="btn red" href="./cartaPlatos.php">Volver</a>
                </div>
            </div>
        </div>
        ';

?>