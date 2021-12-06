<?php 
   
    include '../header.php';

    //Conexion con base de datos
    require '../../database/db_connect.php';
    $mysqli = conectar();
    $email = $_POST['email'];

    // Consulta
    $resultado = $mysqli->query("SELECT contraseña FROM usuario WHERE email='$email'");
    $reg=$resultado->fetch_assoc();

    if ($reg) {

        echo '
            <div class="main d-flex justify-content-center align-items-center">
                <div class="card">
                    <h5 class="card-header bg-dark text-white-50">Contraseña de: ' . ($_POST["email"]) . '</h5>
                    <div class="card-body d-flex flex-column bg-light p-4">
                        <p>Contraseña: '.$reg['contraseña'].'</p>
                        <a class="btn red" href="../../index.php">Volver</a>
                    </div>
                </div>
            </div>
        </body>
        ';

    } else {

        echo '<div class="main d-flex flex-column justify-content-center align-items-center"><h2>Ese email no está registrado</h2><a class="btn red" href="./recuperarContraseña.php">Volver</a></div>';

    }

?>