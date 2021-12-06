<?php
    include '../header.php';

    //Conexion con base de datos
    require '../../database/db_connect.php';
    $mysqli = conectar();

    $titulo = $_POST['titulo'];
    $comensales = $_POST['comensales'];
    $tipo = $_POST['tipo'];
    $id = $_POST['id'];

    // Consulta
    $mysqli->query("UPDATE plato SET titulo = '$titulo', comensales = '$comensales', tipo = '$tipo' WHERE id='$id'");

    echo '<div class="main d-flex flex-column justify-content-center align-items-center"><h2>Plato editado con éxito</h2><a class="btn red" href="./cartaPlatos.php">Volver</a></div>';

?>