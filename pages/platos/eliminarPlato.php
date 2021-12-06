<?php
    include '../header.php';

    require '../../database/db_connect.php';
    $mysqli = conectar();

    $mysqli->query("DELETE FROM plato WHERE id=".$_GET["id"]);

    echo '<div class="main d-flex flex-column justify-content-center align-items-center"><h2>Plato eliminado con éxito</h2><a class="btn red" href="./cartaPlatos.php">Volver</a></div>';

?>