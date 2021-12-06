<?php
    include '../header.php';

    require '../../database/db_connect.php';
    $mysqli = conectar();
    $email = $_POST['email'];

    // revisar primero si el usuario no existe en la BBDD
    $resultado = $mysqli->query("SELECT * FROM usuario WHERE email='$email'");
    $reg=$resultado->fetch_assoc();

    if ($reg) {

        echo '<div class="main d-flex flex-column justify-content-center align-items-center"><h2>Este email ya esta registrado a otro usuario</h2><a class="btn" href="./mostrarUsuarios.php">Volver</a></div>';

    } else {

    $mysqli->query('INSERT INTO usuario (nombre, email, contraseña, accesoAdmin) VALUES ("'.$_POST['nombre'].'","'. $_POST['email'].'","'. $_POST['contraseña'].'",'. $_POST['accesoAdmin'].');');

    echo '<div class="main d-flex flex-column justify-content-center align-items-center"><h2>Usuario Añadido con éxito</h2><a class="btn red" href="./mostrarUsuarios.php">Volver</a></div>';

    }
    
?>