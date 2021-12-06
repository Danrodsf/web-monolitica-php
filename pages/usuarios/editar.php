<?php
    include '../header.php';

    //Conexion con base de datos
    require '../../database/db_connect.php';
    
    $mysqli = conectar();
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $accesoAdmin = $_POST['accesoAdmin'];
    
    // Consulta
    $mysqli->query("UPDATE usuario SET nombre = '$nombre', email = '$email', accesoAdmin = '$accesoAdmin' WHERE id='$id'");

    echo '<div class="main d-flex flex-column justify-content-center align-items-center"><h2>Usuario editado con éxito</h2><a class="btn red" href="./mostrarUsuarios.php">Volver</a></div>';

?>