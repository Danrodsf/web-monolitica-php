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

//conexión con la base de datos

    require '../../database/db_connect.php';
    $mysqli = conectar();

    //consulta bbdd
    $resultado = $mysqli->query("SELECT id, titulo FROM plato");

    //Imprime el resultado

    echo '
        <div class="main d-flex justify-content-center align-items-center">
            <div class="card">
                <h5 class="card-header bg-dark text-white-50">Carta de Platos</h5>
                <div class="card-body d-flex flex-column p-4 bg-light">
                    <ol>
        ';

    while ($reg = $resultado->fetch_assoc()) {

        echo '
                        <li>
                            <a class="m-1 btn red" href="./detallesPlato.php?id=' . $reg['id'] . '&titulo=' . $reg['titulo'] . '">' . $reg['titulo'] . '</a>
                        </li>
            ';

    }

    echo '
                    </ol>
                </div>  
            </div>
        </div>
        ';

?>