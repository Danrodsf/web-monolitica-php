<?php
    include '../header.php';

    require '../../database/db_connect.php';
    $mysqli = conectar();

    $mysqli->query('INSERT INTO plato (titulo, comensales, tipo) VALUES ("'.$_POST['titulo'].'",'
    . $_POST['comensales'].',"'. $_POST['tipo'].'");');

    echo '<div class="main d-flex flex-column justify-content-center align-items-center"><h2>Plato Añadido con éxito</h2><a class="btn red" href="./cartaPlatos.php">Volver</a></div>';
    
?>