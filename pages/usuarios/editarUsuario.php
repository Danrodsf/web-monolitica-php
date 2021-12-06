<?php
    
    include '../header.php';
    if ((!isset($_SESSION['accesoAdmin'])) || ($_SESSION['accesoAdmin'] === 0) ) {
        echo '
            <div class="main d-flex justify-content-center align-items-center">
                <p>No tiene permisos para acceder a esta area</p>
            </div>
        ';
        return;    
        }
        
    $id=($_GET["id"]);
    $nombre=($_GET["nombre"]);
    $email=($_GET["email"]);
    $accesoAdmin=($_GET["accesoAdmin"]);


    echo '
        <div class="main d-flex justify-content-center align-items-center">
            <form class="form flexColumn" action="editar.php" method="post">
                <h4 class="card-header bg-dark text-white-50">Editar '.$nombre.'</h4>
                <div class="card-body d-flex flex-column p-4 bg-light">
                    <label for="nombre">Nombre</label>
                    <input class="m-3" type="text" name="nombre" value="'.$nombre.'" pattern="^[A-Za-z ]{3,16}$" title="Min. 3 caracteres y solo admite letras y espacios" required/>
                    <label for="email">Email</label>
                    <input class="m-3" type="email" name="email" value="'.$email.'" required/>
                    <label for="accesoAdmin">Admin</label>
                    <select class="m-3" name="accesoAdmin">
                        <option value="0">Usuario</option>
                        <option value="1">Admin</option>  
                    </select>
                    <input type="hidden" name="id" value="'.$id.'" />
                    <input class="m-3 btn btn-danger" type="submit" value="Editar" />
                    <a class="btn red" href="./mostrarUsuarios.php">Volver</a>
                </div>
            </form>
        </div>
';
?>