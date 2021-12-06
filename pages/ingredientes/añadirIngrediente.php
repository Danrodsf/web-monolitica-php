<?php
    include '../header.php';

    require '../../database/db_connect.php';
    $mysqli = conectar();

    $mysqli->query('INSERT INTO ingrediente (nombre, cantidad) VALUES ("'.$_POST['nombre'].'",'. $_POST['cantidad'].');');

    echo '<div class="main d-flex flex-column justify-content-center align-items-center"><h2>Ingrediente añadido con éxito</h2><a class="btn red" href="./mostrarIngrediente.php">Volver</a></div>';
    
?>