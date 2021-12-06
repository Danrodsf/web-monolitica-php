<?php
    include '../header.php';

    require '../../database/db_connect.php';
    $mysqli = conectar();

    $mysqli->query("DELETE FROM ingrediente WHERE id=".$_GET["id"]);

    echo '<div class="main d-flex flex-column justify-content-center align-items-center"><h2>Ingrediente eliminado con éxito</h2><a class="btn red" href="./mostrarIngrediente.php">Volver</a></div>';

?>