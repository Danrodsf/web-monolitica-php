<?php
    include '../header.php';

    require '../../database/db_connect.php';
    
    $mysqli = conectar();
    $email = $_POST['email'];

    // revisar primero si el usuario no existe en la BBDD
    $resultado = $mysqli->query("SELECT * FROM usuario WHERE email='$email'");
    $reg=$resultado->fetch_assoc();

    if ($reg) {

        echo '<div class="main d-flex flex-column justify-content-center align-items-center"><h2>Este email ya esta registrado a un usuario</h2><a class="btn" href="./registroUsuario.php">Volver</a></div>';

    } else {

        if ($_POST['nombre'] !== "" && $_POST['email'] !== "" && $_POST['contrasena'] !== "") {

            $mysqli->query('INSERT INTO usuario (nombre, email, contrasena) VALUES ("'.$_POST['nombre'].'","'. $_POST['email'].'","'. $_POST['contrasena'].'");');
            echo '<div class="main d-flex flex-column justify-content-center align-items-center"><h2>Usuario Registrado con éxito</h2><a class="btn red" href="../../index.php">Volver</a></div>';

        } else {

            echo '<div class="main d-flex flex-column justify-content-center align-items-center"><h2>Por favor rellene todos los campos</h2><a class="btn red" href="./registroUsuario.php">Volver</a></div>';
        }

    }
?>