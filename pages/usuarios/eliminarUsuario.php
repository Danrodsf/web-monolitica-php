<?php
    include '../header.php';

    require '../../database/db_connect.php';
    $mysqli = conectar();

    $mysqli->query("DELETE FROM usuario WHERE id=".$_GET["id"]);

    echo '<div class="main d-flex flex-column justify-content-center align-items-center"><h2>Usuario eliminado con éxito</h2><a class="btn red" href="./mostrarUsuarios.php">Volver</a></div>';

?>