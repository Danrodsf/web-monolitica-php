<?php
    ob_start();
    include '../header.php';
    require '../../database/db_connect.php';
    $mysqli = conectar();

    if (!isset($_POST['email'], $_POST['contraseña']) )
            {
			// Could not get the data that should have been sent.
			exit('Por favor llene los datos para iniciar sesión!');
			}

    /////////////////////////////////////////////////////////////////////////////////////////////////////

    if ($stmt = $mysqli->prepare('SELECT id, nombre, email, contraseña, accesoAdmin FROM usuario WHERE email = ?')) {
        $stmt->bind_param('s', $_POST["email"]);
        $stmt->execute();
        $stmt->store_result();
        
        // SI EL USUARIO EXISTE EN LA TABLA SE EXTRAE Y SE APUNTA SU NOMBRE Y SU CLAVE
            if ($stmt->num_rows > 0){
                $stmt->bind_result($id, $nombre, $email, $contraseña, $accesoAdmin);
                $stmt->fetch();
                
                // AHORA VERIFICA SI LA CONTRASEÑA QUE SE EXTRAJO DE LA TABLA ES IGUAL A LA QUE SE ENVIA DESDE EL FORMULARIO         
                if($_POST["contraseña"] === $contraseña) {
                    // SI COINICIDEN AMBAS CONTRASEÑAS SE INICIA LA SESION Y SE LE DA LA BIENVENIDA AL USUARIO CON ECHO
                    session_regenerate_id();
                    $_SESSION['loggedin'] = TRUE;
                    $_SESSION['id'] = $id;
                    $_SESSION['nombre'] = $nombre;
                    $_SESSION['email'] = $email;
                    $_SESSION['contraseña'] = $contraseña;
                    $_SESSION['accesoAdmin'] = $accesoAdmin;
                    header('Location: perfilUsuario.php');
                } 
            
                // SI EL USUARIO EXISTE PERO EL PASSWORD NO COINCIDE IMPRIMIR EN PANTALLA PASSWORD INCORRECTO
        
                else { echo '<div class="main d-flex flex-column justify-content-center align-items-center"><h2>Contraseña Incorrecta</h2><a class="btn red" href="../../index.php">Volver</a></div>'; }

            }  
        
                    // SI EL USUARIO NO EXISTE MOSTRAR USUARIO INCORRECTO
            else { echo '<div class="main d-flex flex-column justify-content-center align-items-center"><h2>Usuario Incorrecto</h2><a class="btn red" href="../../index.php">Volver</a></div>'; }

        $stmt->close();
    } 

?>

