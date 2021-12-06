<?php

    include '../header.php';
    
    if ((!isset($_SESSION['accesoAdmin']))||($_SESSION['accesoAdmin'] === 0)) {
        echo '
            <div class="main d-flex justify-content-center align-items-center">
                <p>No tiene permisos para acceder a esta area</p>
            </div>
        ';
        return;    
    };

    //conexión con la base de datos

    require '../../database/db_connect.php';
    $mysqli = conectar();

    //consulta bbdd
    $resultado = $mysqli->query("SELECT id, nombre, email, accesoAdmin FROM usuario");

    //Imprime el resultado
    echo '
        <div class="main d-flex justify-content-center align-items-center">
            <div class="card">
                <h5 class="card-header bg-dark text-white-50">Lista de Usuarios</h5>
                <table class="table d-flex flex-column p-4 bg-light">
                <tr>
                    <th>Ver Detalles</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
        ';
    while ($reg = $resultado->fetch_assoc()) {
        echo '
                <tr>
                    <td><a class="btn red" href="./detallesUsuario.php?id=' . $reg['id'] . '&nombre=' . $reg['nombre'] . '">' . $reg['nombre'] . '</a></td>
                    <td><a class="btn red" href="./editarUsuario.php?id=' . $reg['id'] . '&nombre=' . $reg['nombre'] . '&email=' . $reg['email'] . '&accesoAdmin=' . $reg['accesoAdmin'] . '"><i class="bi bi-pencil-square"></i></a></td>
                    <td><a class="btn red" href="./eliminarUsuario.php?id=' . $reg['id'] .'"><i class="bi bi-trash"></i></a></td>
                </tr>
            ';
    }
    echo '
        </table>
        <a class="btn btn-danger" href="./añadirUsuario.php">Añadir Usuario</a>
    </div>
    ';

?>