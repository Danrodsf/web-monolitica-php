<?php  
    include '../header.php';
    // Solo se permite el ingreso con el inicio de sesion.
    // Si el usuario no se ha logueado se le regresa al inicio.
    if (!isset($_SESSION['loggedin'])) {
        echo '
            <div class="main d-flex justify-content-center align-items-center">
                <p>No tiene permisos para acceder a esta area</p>
            </div>
            ';
            return;
        };

     echo '
                <div class="main d-flex justify-content-center align-items-center">
                    <div class="card">
                        <h3 class="card-header bg-dark text-white-50">Bienvenidx '.$_SESSION['nombre'].'</h3>
                        <div class="card-body d-flex flex-column p-4 bg-light">
                            <p class="m-3">Tu id de usuario: '.$_SESSION['id'].'</p>
                            <p class="m-3">Tu correo: '.$_SESSION['email'].'</p>
                            <p class="m-3">Tu Contraseña: '.$_SESSION['contraseña'].'</p>
                            <a class="m-3 btn btn-danger"href="logout.php">Cerrar Sesión</a>
                        </div>
                    </div>
                </div>
            </body>
        </html>
        ';
?>